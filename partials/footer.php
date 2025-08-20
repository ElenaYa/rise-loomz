<?php
// partials/footer.php
?>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5><?php echo htmlspecialchars($site_config['company_name']); ?></h5>
                    <p class="text-muted">Asiakaspalvelukonsultoinnin asiantuntijat. Autamme yrityksiä parantamaan asiakaskokemusta ja optimoimaan palveluprosesseja.</p>
                    <div class="contact-info">
                        <p><strong>Sähköposti:</strong> <a href="mailto:<?php echo $site_config['email']; ?>"><?php echo $site_config['email']; ?></a></p>
                    </div>
                </div>
                
                <div class="col-lg-2 mb-4">
                    <h6>Palvelut</h6>
                    <ul class="list-unstyled">
                        <li><a href="services.php#call-center">Puhelinkeskusoptimointi</a></li>
                        <li><a href="services.php#crm">CRM-ratkaisut</a></li>
                        <li><a href="services.php#analytics">Asiakaspalaute-analytiikka</a></li>
                        <li><a href="services.php#journey-mapping">Asiakaspolun kartoitus</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 mb-4">
                    <h6>Yritys</h6>
                    <ul class="list-unstyled">
                        <li><a href="about.php">Tietoa meistä</a></li>
                        <li><a href="testimonials.php">Asiakaskokemukset</a></li>
                        <li><a href="faq.php">Usein kysytyt kysymykset</a></li>
                        <li><a href="contact.php">Ota yhteyttä</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h6>Tilaa uutiskirje</h6>
                    <p class="text-muted small">Saat säännöllisesti vinkkejä asiakaspalvelun parantamiseen.</p>
                    <form id="newsletter-form" class="newsletter-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Sähköpostiosoitteesi" name="email" required>
                            <button class="btn btn-primary" type="submit">Tilaa</button>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newsletter-consent" name="consent" required>
                            <label class="form-check-label small" for="newsletter-consent">
                                Hyväksyn <a href="privacy.php">tietosuojaselosteen</a> ja uutiskirjeen tilaamisen.
                            </label>
                        </div>
                    </form>
                    <div id="newsletter-message"></div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-muted small">
                        &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($site_config['company_name']); ?>. Kaikki oikeudet pidätetään.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy.php" class="text-muted small">Tietosuojaseloste</a></li>
                        <li class="list-inline-item"><a href="terms.php" class="text-muted small">Käyttöehdot</a></li>
                        <li class="list-inline-item"><a href="disclaimer.php" class="text-muted small">Vastuuvapauslauseke</a></li>
                        <li class="list-inline-item"><a href="cookies.php" class="text-muted small">Evästekäytäntö</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Cookie Consent Banner -->
    <div id="cookie-banner" class="cookie-banner" style="display: none;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p class="mb-2 mb-lg-0">
                        Käytämme evästeitä parantaaksemme sivuston toimivuutta ja analysoidaksemme liikennettä. 
                        <a href="cookies.php" class="text-decoration-underline">Lue lisää evästekäytännöstämme</a>.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <button type="button" class="btn btn-sm btn-outline-light me-2" id="manage-cookies">Hallitse asetuksia</button>
                    <button type="button" class="btn btn-sm btn-light me-2" id="reject-cookies">Hylkää ei-välttämättömät</button>
                    <button type="button" class="btn btn-sm btn-primary" id="accept-cookies">Hyväksy kaikki</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Cookie Settings Modal -->
    <div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cookieModalLabel">Evästeasetukset</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Sulje"></button>
                </div>
                <div class="modal-body">
                    <p>Voit hallita evästeasetuksiasi alla olevista vaihtoehdoista. Jotkin evästeet ovat välttämättömiä sivuston toiminnalle.</p>
                    
                    <div class="cookie-category mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>Välttämättömät evästeet</h6>
                            <span class="badge bg-success">Aina päällä</span>
                        </div>
                        <p class="text-muted small">Nämä evästeet ovat välttämättömiä sivuston perustoiminnoille.</p>
                    </div>
                    
                    <div class="cookie-category mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>Analytiikkaevästeet</h6>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="analytics-cookies">
                            </div>
                        </div>
                        <p class="text-muted small">Auttavat meitä ymmärtämään, miten vieraat käyttävät sivustoa.</p>
                    </div>
                    
                    <div class="cookie-category mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>Markkinointievästeet</h6>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="marketing-cookies">
                            </div>
                        </div>
                        <p class="text-muted small">Käytetään kohdistetun mainonnan näyttämiseen.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Peruuta</button>
                    <button type="button" class="btn btn-primary" id="save-cookie-preferences">Tallenna asetukset</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>