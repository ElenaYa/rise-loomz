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

<?php include 'partials/footer.php'; ?>