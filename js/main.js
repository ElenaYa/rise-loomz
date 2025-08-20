document.addEventListener('DOMContentLoaded', function() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const header = document.getElementById('main-header');
    const scrollProgress = document.getElementById('scroll-progress');
    
    function updateHeader() {
        const scrollY = window.scrollY;
        const scrollPercent = (scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        
        if (scrollProgress) {
            scrollProgress.style.width = scrollPercent + '%';
        }
        
        if (header) {
            if (scrollY > 80) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
    }

    window.addEventListener('scroll', updateHeader);

    if (!prefersReducedMotion) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-section').forEach(section => {
            observer.observe(section);
        });
    } else {
        document.querySelectorAll('.fade-in-section').forEach(section => {
            section.classList.add('visible');
        });
    }

    const cookieBanner = document.getElementById('cookie-banner');
    const acceptCookiesBtn = document.getElementById('accept-cookies');
    const rejectCookiesBtn = document.getElementById('reject-cookies');
    const manageCookiesBtn = document.getElementById('manage-cookies');
    const cookieModalElement = document.getElementById('cookieModal');
    const saveCookiePrefsBtn = document.getElementById('save-cookie-preferences');

    let cookieModal;
    if (cookieModalElement) {
        cookieModal = new bootstrap.Modal(cookieModalElement);
    }

    function checkCookieConsent() {
        const consent = localStorage.getItem('cookie-consent');
        if (!consent && cookieBanner) {
            setTimeout(() => {
                cookieBanner.style.display = 'block';
            }, 2000);
        } else if (consent) {
            loadConsentedScripts(JSON.parse(consent));
        }
    }

    function saveCookiePreferences(preferences) {
        const consentData = {
            essential: true,
            analytics: preferences.analytics || false,
            marketing: preferences.marketing || false,
            timestamp: Date.now(),
            expires: Date.now() + (365 * 24 * 60 * 60 * 1000) 
        };
        
        localStorage.setItem('cookie-consent', JSON.stringify(consentData));
        loadConsentedScripts(consentData);
        if (cookieBanner) {
            cookieBanner.style.display = 'none';
        }
    }

    function loadConsentedScripts(consent) {
        if (consent.analytics) {
        }
        
        if (consent.marketing) {
        }
    }

    if (acceptCookiesBtn) {
        acceptCookiesBtn.addEventListener('click', () => {
            saveCookiePreferences({ analytics: true, marketing: true });
        });
    }

    if (rejectCookiesBtn) {
        rejectCookiesBtn.addEventListener('click', () => {
            saveCookiePreferences({ analytics: false, marketing: false });
        });
    }

    if (manageCookiesBtn && cookieModal) {
        manageCookiesBtn.addEventListener('click', () => {
            cookieModal.show();
        });
    }

    if (saveCookiePrefsBtn && cookieModal) {
        saveCookiePrefsBtn.addEventListener('click', () => {
            const analyticsChecked = document.getElementById('analytics-cookies').checked;
            const marketingChecked = document.getElementById('marketing-cookies').checked;
            
            saveCookiePreferences({
                analytics: analyticsChecked,
                marketing: marketingChecked
            });
            
            cookieModal.hide();
        });
    }

    const newsletterForm = document.getElementById('newsletter-form');
    const newsletterMessage = document.getElementById('newsletter-message');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(newsletterForm);
            const email = formData.get('email');
            const consent = formData.get('consent');
            
            if (!consent) {
                showMessage('Sinun tulee hyväksyä tietosuojaseloste.', 'error');
                return;
            }
            
            if (!email || !isValidEmail(email)) {
                showMessage('Anna kelvollinen sähköpostiosoite.', 'error');
                return;
            }
            
            showMessage('Kiitos! Olet nyt tilannut uutiskirjeemme.', 'success');
            newsletterForm.reset();
        });
    }

    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(contactForm);
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');
            const consent = formData.get('consent');
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            let errors = [];
            
            if (!email || !isValidEmail(email)) {
                errors.push('Virheellinen sähköpostiosoite');
            }
            
            if (!subject) {
                errors.push('Aihe on pakollinen');
            }
            
            if (!message || message.trim().length < 10) {
                errors.push('Viesti on pakollinen ja sen tulee olla vähintään 10 merkkiä pitkä');
            }
            
            if (!consent) {
                errors.push('Sinun tulee hyväksyä tietosuojaseloste');
            }
            
            if (errors.length > 0) {
                showContactMessage(errors.join(', '), 'error');
                return;
            }
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Lähetetään...';
            
            setTimeout(() => {
                showContactMessage('Kiitos yhteydenotostasi! Vastaamme sinulle pian.', 'success');
                contactForm.reset();
                submitBtn.disabled = false;
                submitBtn.textContent = originalText;
            }, 1000);
        });
    }

    function showMessage(message, type) {
        if (newsletterMessage) {
            newsletterMessage.innerHTML = `
                <div class="alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show mt-2" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sulje"></button>
                </div>
            `;
        }
    }

    function showContactMessage(message, type) {
        const messageContainer = document.getElementById('contact-message');
        if (messageContainer) {
            messageContainer.innerHTML = `
                <div class="alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show" role="alert">
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sulje"></button>
                </div>
            `;
        }
    }

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: prefersReducedMotion ? 'auto' : 'smooth'
                });
            }
        });
    });

    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    checkCookieConsent();

    function setActiveNavLink() {
        const currentPage = window.location.pathname.split('/').pop() || 'index.php';
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            const linkHref = link.getAttribute('href');
            if (linkHref && (linkHref === currentPage || linkHref.includes(currentPage))) {
                link.classList.add('active');
            }
        });
    }

    setActiveNavLink();

    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    if (img.dataset.src) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const openModals = document.querySelectorAll('.modal.show');
            openModals.forEach(modal => {
                const modalInstance = bootstrap.Modal.getInstance(modal);
                if (modalInstance) {
                    modalInstance.hide();
                }
            });
        }
    });

    let scrollTimeout;
    function debounceScroll() {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }
        scrollTimeout = setTimeout(updateHeader, 10);
    }

    window.removeEventListener('scroll', updateHeader);
    window.addEventListener('scroll', debounceScroll, { passive: true });
});