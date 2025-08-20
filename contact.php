<?php
include_once 'config.php';
include 'partials/header.php';
?>

<section class="page-header section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center fade-in-section">
                <span class="section-badge">Ota yhteyttä</span>
                <h1 class="section-title">Keskustellaan projektistasi</h1>
                <p class="section-description">
                    Olemme valmiita auttamaan sinua parantamaan asiakaspalveluasi. 
                    Ota yhteyttä ja keskustellaan, miten voimme tukea tavoitteitasi.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-section section-padding section-full-height">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="contact-form-card fade-in-section">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3 class="mb-4">Lähetä meille viesti</h3>
                            
                            <div id="contact-message"></div>
                            
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Sähköpostiosoite <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="company" class="form-label">Yritys</label>
                                        <input type="text" class="form-control" id="company" name="company">
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Aihe <span class="text-danger">*</span></label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="">Valitse aihe</option>
                                        <option value="general">Yleinen kysymys</option>
                                        <option value="consultation">Konsultaatiopyyntö</option>
                                        <option value="quote">Tarjouspyyntö</option>
                                        <option value="partnership">Yhteistyömahdollisuus</option>
                                        <option value="other">Muu</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="message" class="form-label">Viesti <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="message" name="message" rows="6" required 
                                              placeholder="Kerro meille projektistasi tai kysymyksestäsi..."></textarea>
                                </div>
                                
                                <div class="mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="privacy-consent" name="consent" required>
                                        <label class="form-check-label" for="privacy-consent">
                                            Hyväksyn <a href="privacy.php" target="_blank">tietosuojaselosteen</a> ja 
                                            suostun henkilötietojeni käsittelyyn yhteydenoton käsittelemiseksi. <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg w-100">Lähetä viesti</button>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-info-panel">
                                <h4>Miksi ottaa yhteyttä?</h4>
                                <ul class="contact-benefits">
                                    <li>Maksutoн alkuarviointi projektillenne</li>
                                    <li>Henkilökohtainen konsultaatio tarpeistanne</li>
                                    <li>Räätälöity ehdotus ratkaisuiksi</li>
                                    <li>Selkeä projektisuunnitelma ja aikataulu</li>
                                </ul>
                                
                                <div class="contact-guarantee">
                                    <h5>🤝 Lupauksemme</h5>
                                    <p>Vastaamme kaikkiin yhteydenottoihin 24 tunnin sisällä arkisin ja tarjoamme aina rehellisen arvion siitä, voimmeko auttaa teidän tilanteessanne.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-info section-padding section-full-height bg-surface">
    <div class="container">
        <div class="text-center mb-5 fade-in-section">
            <span class="section-badge">Yhteystiedot</span>
            <h2 class="section-title">Muut tavat olla yhteydessä</h2>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4 fade-in-section">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <div class="icon-bg icon-primary"><i class="bi bi-envelope"></i></div>
                    </div>
                    <h4>Sähköposti</h4>
                    <p>Vastaamme viesteihin arkisin 24 tunnin sisällä.</p>
                    <a href="mailto:<?php echo $site_config['email']; ?>" class="contact-link">
                        <?php echo $site_config['email']; ?>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4 fade-in-section">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <div class="icon-bg icon-accent"><i class="bi bi-clock-history"></i></div>
                    </div>
                    <h4>Vastausaika</h4>
                    <p>Pyrimme vastaamaan kaikkiin yhteydenottoihin nopeasti.</p>
                    <span class="contact-detail">1-2 arkipäivää</span>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4 fade-in-section">
                <div class="contact-info-card">
                    <div class="contact-icon">
                        <div class="icon-bg icon-support"><i class="bi bi-geo-alt"></i></div>
                    </div>
                    <h4>Toiminta-alue</h4>
                    <p>Palvelemme yrityksiä kaikkialla Suomessa ja etänä maailmanlaajuisesti.</p>
                    <span class="contact-detail">Koko Suomi + Remote</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq-preview section-padding section-full-height bg-surface">
    <div class="container">
        <div class="text-center mb-5 fade-in-section">
            <h2>Usein kysytyt kysymykset</h2>
            <p>Löydä vastauksia yleisimpiin kysymyksiin ennen yhteydenottoa</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Kuinka kauan projekti tyypillisesti kestää?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Projektin kesto riippuu laajuudesta ja tavoitteista. Pienet optimointiprojektit voivat kestää 2-4 viikkoa, kun taas kokonaisvaltaiset muutoshankkeet voivat kestää 3-6 kuukautta.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Millaisia tuloksia voin odottaa?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Asiakkaamme ovat tyypillisesti saavuttaneet 20-40% parannuksia asiakastyytyväisyydessä ja 15-30% tehokkuuden kasvua. Tarkat tulokset riippuvat lähtötilanteesta ja tavoitteista.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Onko alkuarviointi maksullista?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ei! Tarjoamme maksuttoman alkuarviointikeskustelun, jossa kartoitamme tarpeitanne ja ehdotamme sopivia ratkaisuja ilman sitoumuksia.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="faq.php" class="btn btn-outline-primary">Katso kaikki kysymykset</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.contact-form-card {
    background: var(--white);
    padding: 3rem;
    border-radius: var(--border-radius);
    box-shadow: 0 8px 30px var(--shadow-lg);
}

.contact-info-panel {
    padding: 2rem;
    background: var(--surface);
    border-radius: var(--border-radius-sm);
    height: 100%;
}

.contact-benefits {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0;
}

.contact-benefits li {
    padding: 0.75rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.1);
    position: relative;
    padding-left: 2rem;
}

.contact-benefits li:before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--support);
    font-weight: bold;
}

.contact-guarantee {
    background: var(--white);
    padding: 1.5rem;
    border-radius: var(--border-radius-sm);
    margin-top: 2rem;
    border-left: 4px solid var(--primary);
}

.contact-guarantee h5 {
    color: var(--primary);
    margin-bottom: 1rem;
}

.contact-info-card {
    text-align: center;
    padding: 2rem;
    background: var(--white);
    border-radius: var(--border-radius-sm);
    box-shadow: 0 4px 20px var(--shadow);
    height: 100%;
    transition: var(--transition);
}

.contact-info-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 25px var(--shadow-lg);
}

.contact-icon {
    margin-bottom: 1.5rem;
    display: flex;
    justify-content: center;
}

.contact-info-card h4 {
    color: var(--dark);
    font-weight: 600;
    margin-bottom: 1rem;
}

.contact-link {
    color: var(--primary);
    text-decoration: none;
    font-weight: 600;
    font-size: 1.125rem;
}

.contact-link:hover {
    color: var(--accent);
    text-decoration: underline;
}

.contact-detail {
    color: var(--primary);
    font-weight: 600;
    font-size: 1.125rem;
}

.meeting-options-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    margin-top: 2rem;
}

.meeting-option {
    background: var(--white);
    padding: 1.5rem;
    border-radius: var(--border-radius-sm);
    box-shadow: 0 4px 20px var(--shadow);
    text-align: center;
    transition: var(--transition);
}

.meeting-option:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 25px var(--shadow-lg);
}

.meeting-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.meeting-option h5 {
    color: var(--primary);
    margin-bottom: 1rem;
}

.meeting-duration {
    display: inline-block;
    background: var(--surface);
    color: var(--primary);
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.875rem;
    font-weight: 600;
    margin-top: 1rem;
}

.timeline-steps {
    position: relative;
}

.timeline-steps::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(180deg, var(--primary), var(--accent));
    transform: translateX(-50%);
}

.timeline-step {
    display: flex;
    align-items: center;
    margin-bottom: 3rem;
    position: relative;
}

.timeline-step:nth-child(even) {
    flex-direction: row-reverse;
}

.timeline-step:nth-child(even) .step-content {
    text-align: right;
}

.step-number {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary), var(--accent));
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.25rem;
    font-weight: 700;
    position: relative;
    z-index: 2;
    margin: 0 2rem;
}

.step-content {
    flex: 1;
    max-width: 300px;
}

.step-content h5 {
    color: var(--primary);
    margin-bottom: 0.75rem;
}

.timeline-duration {
    display: inline-block;
    background: var(--surface);
    color: var(--primary);
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-top: 0.5rem;
}

@media (max-width: 992px) {
    .meeting-options-grid {
        grid-template-columns: 1fr;
    }
    
    .timeline-steps::before {
        left: 30px;
    }
    
    .timeline-step {
        flex-direction: row !important;
        padding-left: 80px;
    }
    
    .timeline-step:nth-child(even) .step-content {
        text-align: left;
    }
    
    .step-number {
        position: absolute;
        left: 0;
        margin: 0;
    }
}

@media (max-width: 768px) {
    .contact-form-card {
        padding: 2rem;
    }
    
    .contact-form-card .row {
        flex-direction: column-reverse;
    }
    
    .contact-info-panel {
        margin-bottom: 2rem;
    }
}
</style>

<?php include 'partials/footer.php'; ?>