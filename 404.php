<?php
include_once 'config.php';
include 'partials/header.php';
?>

<section class="error-page section-padding section-full-height">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center fade-in-section">
                <div class="error-content">
                    <div class="error-number">404</div>
                    <h1 class="error-title">Sivua ei löytynyt</h1>
                    <p class="error-description">
                        Hakemaasi sivua ei löydy. Se on saatettu siirtää, poistaa tai osoite on kirjoitettu väärin.
                    </p>
                    
                    <div class="error-actions">
                        <a href="index.php" class="btn btn-primary btn-lg me-3">Takaisin etusivulle</a>
                        <a href="services.php" class="btn btn-outline-primary btn-lg">Tutustu palveluihin</a>
                    </div>
                    
                    <div class="helpful-links mt-5">
                        <h4>Ehkä etsit näitä:</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li><a href="services.php">🔧 Palvelumme</a></li>
                                    <li><a href="about.php">ℹ️ Tietoa meistä</a></li>
                                    <li><a href="contact.php">📧 Yhteystiedot</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li><a href="faq.php">❓ Usein kysytyt kysymykset</a></li>
                                    <li><a href="testimonials.php">💬 Asiakaskokemukset</a></li>
                                    <li><a href="privacy.php">🔒 Tietosuojaseloste</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5">
                        <img src="img/404-sivu.webp" alt="Hämmentynyt henkilö etsii oikeaa sivua tietokoneelta" class="responsive-image" style="max-width: 400px;" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="search-help section-padding bg-surface">
    <div class="container">
        <div class="text-center fade-in-section">
            <h3>Voit myös kokeilla hakua</h3>
            <p class="mb-4">Anna hakusana löytääksesi etsimäsi sisällön</p>
            <div class="search-form-container">
                <form class="search-form" onsubmit="performSearch(event)">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Hae sivustolta..." id="search-input">
                        <button class="btn btn-primary" type="submit">Hae</button>
                    </div>
                </form>
                <div class="search-suggestions mt-3">
                    <p class="small text-muted">Suositukset: 
                        <a href="services.php?search=crm" class="text-decoration-none">CRM</a>, 
                        <a href="services.php?search=puhelinkeskus" class="text-decoration-none">puhelinkeskus</a>, 
                        <a href="services.php?search=asiakaspalaute" class="text-decoration-none">asiakaspalaute</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.error-page {
    background: linear-gradient(135deg, var(--primary) 0%, #4C63D2 100%);
    color: var(--white);
    min-height: 100vh;
}

.error-number {
    font-size: 8rem;
    font-weight: 700;
    background: linear-gradient(135deg, var(--white), rgba(255,255,255,0.7));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 1rem;
}

.error-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 1.5rem;
}

.error-description {
    font-size: 1.125rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 2.5rem;
}

.error-actions {
    margin-bottom: 3rem;
}

.helpful-links h4 {
    color: var(--white);
    margin-bottom: 1.5rem;
}

.helpful-links a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
    display: inline-block;
    margin-bottom: 0.75rem;
    transition: var(--transition);
    padding: 0.5rem;
    border-radius: var(--border-radius-sm);
}

.helpful-links a:hover {
    color: var(--white);
    background: rgba(255, 255, 255, 0.1);
    text-decoration: underline;
}

.search-form-container {
    max-width: 500px;
    margin: 0 auto;
}

.search-suggestions a {
    color: var(--primary);
    margin: 0 0.5rem;
}

.search-suggestions a:hover {
    color: var(--accent);
}

@media (max-width: 768px) {
    .error-number {
        font-size: 6rem;
    }
    
    .error-title {
        font-size: 2rem;
    }
    
    .error-actions .btn {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
    }
    
    .error-actions .me-3 {
        margin-right: 0 !important;
    }
    
    .helpful-links .row {
        text-align: center;
    }
}
</style>

<script>
function performSearch(event) {
    event.preventDefault();
    const searchTerm = document.getElementById('search-input').value.toLowerCase();
    
    // Simple client-side search logic
    const searchMappings = {
        'crm': 'services.php#crm',
        'puhelinkeskus': 'services.php#call-center',
        'asiakaspalaute': 'services.php#analytics',
        'analytics': 'services.php#analytics',
        'hinta': 'services.php#pricing',
        'yhteystiedot': 'contact.php',
        'ota yhteyttä': 'contact.php',
        'palvelut': 'services.php',
        'tietoa': 'about.php',
        'kokemukset': 'testimonials.php',
        'kysymykset': 'faq.php',
        'uutiskirje': 'index.php#footer'
    };
    
    // Find matching page
    let targetPage = null;
    for (const [key, page] of Object.entries(searchMappings)) {
        if (searchTerm.includes(key)) {
            targetPage = page;
            break;
        }
    }
    
    if (targetPage) {
        window.location.href = targetPage;
    } else {
        // Default to services page
        window.location.href = 'services.php?search=' + encodeURIComponent(searchTerm);
    }
}
</script>

<?php include 'partials/footer.php'; ?>