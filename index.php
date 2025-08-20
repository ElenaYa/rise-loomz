<?php
include_once 'config.php';

// Dynamic meta tags for home page
$page_title = 'Asiakaspalvelukonsultointi - Parempi asiakaskokemus - ' . $site_config['company_name'];
$page_description = 'Parannamme asiakaspalveluanne asiantuntevalla konsultoinnilla. Puhelinkeskusoptimointia, asiakaskokemuksen mittausta ja CRM-ratkaisuja Suomessa.';
$page_keywords = 'asiakaspalvelu konsultointi, puhelinkeskus optimointi, CRM ratkaisut, asiakaskokemus mittaus, palveluprosessit, asiakaspalaute analytiikka';

include 'partials/header.php';
?>

<!-- Hero Section - Full Height Cover Card -->
<section class="hero-section" id="hero">
    <div class="hero-container">
        <div class="hero-card cover-card">
            <div class="hero-content">
                <h1 class="hero-title">Paranna asiakaspalveluasi asiantuntevalla konsultoinnilla</h1>
                <p class="hero-description">
                    Autamme yrityksiäsi optimoimaan asiakaspalveluprosesseja, parantamaan asiakaskokemusta ja kasvattamaan asiakastyytyväisyyttä mitattavilla tuloksilla.
                </p>
                <div class="hero-actions">
                    <a href="contact.php" class="btn btn-primary btn-lg me-3">Pyydä arviointi</a>
                    <a href="services.php" class="btn btn-outline-light btn-lg">Tutustu palveluihin</a>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <span>Vieritä alas</span>
        <div class="scroll-arrow"></div>
    </div>
</section>

<!-- Services Overview Section -->
<section class="services-overview section-padding section-full-height" id="services-overview">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 fade-in-section">
                <img src="img/asiakaspalvelu-konsultointi.webp" alt="Asiakaspalvelukonsultointi tiimi työskentelee modernissa toimistossa" class="responsive-image" loading="lazy">
            </div>
            <div class="col-lg-6 fade-in-section">
                <span class="section-badge">Palvelumme</span>
                <h2 class="section-title">Kattavat ratkaisut asiakaspalvelun parantamiseen</h2>
                <p class="section-description">
                    Tarjoamme kokonaisvaltaisia konsultointipalveluita, jotka auttavat yrityksiäsi 
                    saavuttamaan parempia tuloksia asiakaspalvelussa ja rakentamaan pitkäaikaisia asiakassuhteita.
                </p>
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <div class="icon-bg icon-primary"></div>
                        </div>
                        <h4>Puhelinkeskusoptimointi</h4>
                        <p>Tehostamme puhelinkeskuksenne toimintaa ja parannamme palvelun laatua.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <div class="icon-bg icon-accent"></div>
                        </div>
                        <h4>CRM-järjestelmäratkaisut</h4>
                        <p>Optimoimme asiakashallintajärjestelmänne maksimaalisen hyödyn saavuttamiseksi.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <div class="icon-bg icon-support"></div>
                        </div>
                        <h4>Asiakaspalaute-analytiikka</h4>
                        <p>Muutamme asiakaspalautteen toimenpiteiksi data-analytiikan avulla.</p>
                    </div>
                    <div class="service-card">
                        <div class="service-icon">
                            <div class="icon-bg icon-primary"></div>
                        </div>
                        <h4>Asiakaspolun kartoitus</h4>
                        <p>Tunnistamme ja korjaamme asiakaspolun ongelmakohtia.</p>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="services.php" class="btn btn-primary">Katso kaikki palvelut</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section section-padding section-full-height bg-surface" id="stats">
    <div class="container">
        <div class="text-center mb-5 fade-in-section">
            <span class="section-badge">Tulokset numeroina</span>
            <h2 class="section-title">Mitattavia parannuksia asiakaspalvelussa</h2>
            <p class="section-description">
                Asiakkaamme ovat saavuttaneet merkittäviä tuloksia yhteistyössämme
            </p>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4 fade-in-section">
                <img src="img/asiakastyytyvainen-puhelinkeskus.webp" alt="Tyytyväinen asiakaspalvelija puhelinkeskuksessa hymyilee kuulokkeilla" class="responsive-image" loading="lazy">
            </div>
            <div class="col-lg-6">
                <div class="stats-grid fade-in-section">
                    <div class="stat-item">
                        <div class="stat-number">+35%</div>
                        <div class="stat-label">Asiakastyytyväisyys</div>
                        <div class="stat-description">Keskimääräinen parannus asiakastyytyväisyydessä</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">-28%</div>
                        <div class="stat-label">Vastausajat</div>
                        <div class="stat-description">Nopeammat vastaukset asiakkaiden kysymyksiin</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">+42%</div>
                        <div class="stat-label">Ensiratkaisuaste</div>
                        <div class="stat-description">Useammat ongelmat ratkaistaan ensimmäisellä kerralla</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">+18%</div>
                        <div class="stat-label">Asiakasuskollisuus</div>
                        <div class="stat-description">Parempi asiakassäilyvyys ja uusintaostot</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">200+</div>
                        <div class="stat-label">Onnistunutta projektia</div>
                        <div class="stat-description">Toteutettuja asiakaspalvelun parantamisprojekteja</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Asiakastyytyväisyys</div>
                        <div class="stat-description">Tyytyväisiä asiakkaita palveluumme</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process section-padding section-full-height" id="process">
    <div class="container">
        <div class="text-center mb-5 fade-in-section">
            <span class="section-badge">Prosessimme</span>
            <h2 class="section-title">Miten toimimme</h2>
            <p class="section-description">
                Selkeä ja tehokas prosessi varmistaa parhaat tulokset asiakaspalvelunne kehittämisessä.
            </p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="process-timeline fade-in-section">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Nykytilan arviointi</h4>
                            <p>Analysoimme nykyiset asiakaspalveluprosessinne ja tunnistamme kehittämiskohteet perusteellisen kartoituksen avulla.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Strategian suunnittelu</h4>
                            <p>Luomme räätälöidyn strategian tavoitteidenne saavuttamiseksi ja määrittelemme konkreettiset toimenpiteet.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Toteutus ja optimointi</h4>
                            <p>Implementoimme ratkaisut vaiheittain ja optimoimme niitä jatkuvasti saamaamme palautteen perusteella.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Seuranta ja mittaus</h4>
                            <p>Seuraamme tuloksia säännöllisesti ja varmistamme tavoitteiden saavuttamisen pitkällä aikavälillä.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us section-padding section-full-height bg-surface" id="why-choose">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 fade-in-section">
                <span class="section-badge">Miksi valita meidät</span>
                <h2 class="section-title">Kokemusta, asiantuntemusta ja tuloksia</h2>
                <p class="section-description">
                    Olemme auttaneet kymmeniä yrityksiä parantamaan asiakaspalveluaan ja saavuttamaan parempia liiketoimintatuloksia.
                </p>
            </div>
            <div class="col-lg-6 fade-in-section">
                <img src="img/konsultointi-kokous.webp" alt="Konsultointikokous, jossa asiantuntijat keskustelevat asiakaspalvelun kehittämisestä" class="responsive-image" loading="lazy">
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-4 mb-4 fade-in-section">
                <div class="benefit-card">
                    <div class="benefit-number">01</div>
                    <h4>Mittarit ja analytiikka</h4>
                    <p>Käytämme data-analytiikkaa tunnistamaan parannuskohteet ja mittaamaan tuloksia objektiivisesti. Kaikki suosituksemme perustuvat konkreettisiin mittareihin.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4 fade-in-section">
                <div class="benefit-card">
                    <div class="benefit-number">02</div>
                    <h4>Räätälöidyt ratkaisut</h4>
                    <p>Jokainen yritys on erilainen. Suunnittelemme ratkaisut yrityksenne erityistarpeiden mukaan ja huomioimme toimialakohtaiset vaatimukset.</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4 fade-in-section">
                <div class="benefit-card">
                    <div class="benefit-number">03</div>
                    <h4>Jatkuva tuki</h4>
                    <p>Tarjoamme pitkäaikaista tukea ja seurantaa varmistaaksemme kestävät tulokset. Olemme mukana matkassa myös toteutuksen jälkeen.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features section-padding section-full-height" id="features">
    <div class="container">
        <div class="text-center mb-5 fade-in-section">
            <span class="section-badge">Erikoisosaamisemme</span>
            <h2 class="section-title">Syvää asiantuntemusta asiakaspalvelussa</h2>
            <p class="section-description">
                Vuosien kokemus eri toimialoilta on opettanut meille, mitkä ratkaisut todella toimivat
            </p>
        </div>
        
        <div class="feature-grid fade-in-section">
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h4>Data-analytiikka</h4>
                <p>Hyödynnämme kehittynyttä analytiikkaa asiakaspalvelun mittaamisessa ja optimoinnissa. Saamme esiin piilevät ongelmat ja mahdollisuudet.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h4>Toimialaosaaminen</h4>
                <p>Meillä on syvä ymmärrys eri toimialojen erityispiirteistä ja asiakaspalvelun haasteista teknologiasta kaupankauppaan.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h4>Innovatiiviset ratkaisut</h4>
                <p>Tuomme uusimmat teknologiat ja trendit asiakaspalveluun, kuten tekoälyn ja automaation hyödyntämisen.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🤝</div>
                <h4>Kumppanuus</h4>
                <p>Emme ole vain konsultteja vaan kumppaneitanne pitkällä aikavälillä. Menestymisenne on meidän menestymistämme.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h4>Nopeat tulokset</h4>
                <p>Vaikka rakennamme kestäviä ratkaisuja, ensimmäiset parannukset näkyvät usein jo muutamassa viikossa.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎓</div>
                <h4>Koulutus ja kehitys</h4>
                <p>Koulutamme tiimenne käyttämään uusia työkaluja ja menetelmiä, jotta hyöty säilyy pitkään.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section-padding section-full-height" id="cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 fade-in-section">
                <div class="cta-card">
                    <h2>Valmis parantamaan asiakaspalveluasi?</h2>
                    <p class="mb-4">Ota yhteyttä tänään ja saa maksutta arvio nykyisestä asiakaspalvelustasi. Keskustellaan, miten voimme auttaa saavuttamaan tavoitteesi.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="contact.php" class="btn btn-light btn-lg">Aloita tänään</a>
                        <a href="services.php" class="btn btn-outline-light btn-lg">Tutustu palveluihin</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-in-section">
                <img src="img/onnistunut-asiakaspalvelu.webp" alt="Onnistunut asiakaspalvelutilanne, jossa asiakas ja palvelija hymyilevät" class="responsive-image" loading="lazy">
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>