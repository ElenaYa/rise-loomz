<?php
include_once 'config.php';
include 'partials/header.php';
?>

<!-- Page Header -->
<section class="page-header section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center fade-in-section">
                <span class="section-badge">Usein kysytyt kysymykset</span>
                <h1 class="section-title">Vastauksia yleisimpiin kysymyksiin</h1>
                <p class="section-description">
                    Löydä vastaukset kysymyksiisi asiakaspalvelukonsultoinnista ja palveluistamme. Jos et löydä etsimääsi, ota rohkeasti yhteyttä.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Quick Navigation -->
<section class="faq-navigation section-padding bg-surface">
    <div class="container">
        <div class="text-center mb-4 fade-in-section">
            <h3>Siirry suoraan aiheeseen</h3>
        </div>
        <div class="row fade-in-section">
            <div class="col-lg-8 mx-auto">
                <div class="nav-pills-wrapper">
                    <ul class="nav nav-pills justify-content-center" id="faq-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#general">Yleistä</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Palvelut</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Hinnoittelu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#process">Prosessi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#results">Tulokset</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- General Questions -->
<section class="faq-section section-padding section-full-height" id="general">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 fade-in-section">
                <img src="img/faq-yleista.webp" alt="Konsultti vastaa asiakkaan kysymyksiin modernissa neuvotteluhuoneessa" class="responsive-image" loading="lazy">
            </div>
            <div class="col-lg-6">
                <span class="section-badge">Yleisiä kysymyksiä</span>
                <h2 class="section-title">Perustiedot palveluistamme</h2>
                
                <div class="accordion" id="generalAccordion">
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#general1" aria-expanded="true">
                                Kuinka kauan asiakaspalvelun parantamisprojekti tyypillisesti kestää?
                            </button>
                        </h3>
                        <div id="general1" class="accordion-collapse collapse show" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                Projektin kesto riippuu tavoitteista ja laajuudesta. Pienet optimointiprojektit kestävät 2-4 viikkoa, 
                                keskisuuret kehityshankkeet 2-3 kuukautta ja kokonaisvaltaiset muutosprojektit 3-6 kuukautta. 
                                Määrittelemme aikataulun yhdessä projektin alussa ja pidämme kiinni sovituista määräajoista.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general2">
                                Sopiiko palvelunne pienille ja keskisuurille yrityksille?
                            </button>
                        </h3>
                        <div id="general2" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                Kyllä! Palvelemme yrityksiä koosta riippumatta. Räätälöimme ratkaisut yrityksen koon, 
                                budjetin ja tarpeiden mukaan. Myös pienemmät yritykset voivat hyötyä merkittävästi 
                                asiakaspalvelun optimoinnista, ja meillä on erityisesti pk-yrityksille soveltuvia paketteja.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general3">
                                Mitä toimialoja palvelette?
                            </button>
                        </h3>
                        <div id="general3" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                Meillä on kokemusta laajalti eri toimialoilta mukaan lukien teknologia, vähittäiskauppa, 
                                finanssipalvelut, terveydenhuolto, logistiikka ja telecom. Asiakaspalvelun periaatteet ovat 
                                universaaleja, mutta soveltamisessa huomioimme aina toimialan erityispiirteet ja -vaatimukset.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general4">
                                Voitteko auttaa etätyössä toimivia asiakaspalvelutiimejä?
                            </button>
                        </h3>
                        <div id="general4" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                            <div class="accordion-body">
                                Ehdottomasti! Etätyö on tuonut uusia haasteita asiakaspalveluun, mutta myös mahdollisuuksia. 
                                Autamme optimoimaan etätyökaluja, parantamaan tiimin kommunikaatiota ja varmistamaan 
                                asiakaspalvelun laadun säilymisen riippumatta työntekijöiden sijainnista.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Questions -->
<section class="faq-section section-padding section-full-height bg-surface" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2 fade-in-section">
                <img src="img/faq-palvelut.webp" alt="Eri palveluvaihtoehtoja esiteltynä interaktiivisessa muodossa" class="responsive-image" loading="lazy">
            </div>
            <div class="col-lg-6 order-lg-1">
                <span class="section-badge">Palveluihin liittyvät kysymykset</span>
                <h2 class="section-title">Yksityiskohtaisempaa tietoa palveluista</h2>
                
                <div class="accordion" id="servicesAccordion">
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#services1" aria-expanded="true">
                                Voitteko auttaa CRM-järjestelmän valinnassa ja käyttöönotossa?
                            </button>
                        </h3>
                        <div id="services1" class="accordion-collapse collapse show" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body">
                                Kyllä, CRM-konsultointi on yksi erikoisosaamisalueitamme. Autamme järjestelmän valinnassa, 
                                käyttöönotossa, kustomoinnissa ja henkilöstön koulutuksessa. Varmistamme, että järjestelmä 
                                tukee parhaalla tavalla yrityksenne asiakaspalveluprosesseja ja integroituu muihin järjestelmiin.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#services2">
                                Miten asiakaspalautteen keräys ja analysointi toimii käytännössä?
                            </button>
                        </h3>
                        <div id="services2" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body">
                                Käytämme kehittyneitä työkaluja asiakaspalautteen keräämiseen kaikista kosketuspisteistä 
                                (puhelin, sähköposti, chat, sosiaalinen media). Analysoimme palautteen tekoälyn avulla, 
                                tunnistamme trendejä ja muutamme datan konkreettisiksi toimenpide-ehdotuksiksi. 
                                Seuraamme myös muutosten vaikutusta jatkuvasti.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#services3">
                                Millaista koulutusta tarjoatte henkilöstölle?
                            </button>
                        </h3>
                        <div id="services3" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body">
                                Koulutusohjelmat räätälöidään tarpeidenne mukaan. Voimme kouluttaa perustaidoista (asiakaspalvelutaidot, 
                                viestintä) edistyneisiin tekniikoihin (konfliktien ratkaisu, myyntituki). Käytämme moderneja 
                                koulutusmetodeja kuten roolipelejä, simulaatioita ja käytännön harjoituksia.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#services4">
                                Voitteko auttaa chatbot-ratkaisujen käyttöönotossa?
                            </button>
                        </h3>
                        <div id="services4" class="accordion-collapse collapse" data-bs-parent="#servicesAccordion">
                            <div class="accordion-body">
                                Kyllä! Digitaalinen asiakaspalvelu on kasvava osa tarjontaamme. Autamme chatbot-strategian 
                                suunnittelussa, oikean teknologian valinnassa, toteutuksessa ja optimoinnissa. Varmistamme, 
                                että chatbot täydentää eikä korvaa ihmisten työpanosta sopivissa tehtävissä.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Questions -->
<section class="faq-section section-padding section-full-height" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 fade-in-section">
                <img src="img/faq-hinnoittelu.webp" alt="Hinnoittelumalli esitettynä selkeästi taulukkomuodossa" class="responsive-image" loading="lazy">
            </div>
            <div class="col-lg-6">
                <span class="section-badge">Hinnoitteluun liittyvät kysymykset</span>
                <h2 class="section-title">Kustannukset ja maksutavat</h2>
                
                <div class="accordion" id="pricingAccordion">
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pricing1" aria-expanded="true">
                                Miten hinnoittelu toimii ja mistä kustannukset muodostuvat?
                            </button>
                        </h3>
                        <div id="pricing1" class="accordion-collapse collapse show" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                Hinnoittelemme projektit niiden laajuuden, keston ja vaatimustason mukaan. 
                                Tarjoamme sekä kiinteähintaisia projekteja että tuntiveloitusperusteista konsultointia. 
                                Kustannukset muodostuvat konsultointiajasta, käytettävistä työkaluista ja mahdollisista 
                                kolmansien osapuolten lisenssimaksuista. Laadimme aina tarkan tarjouksen ennen projektin aloittamista.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricing2">
                                Onko mahdollista saada ilmainen alkuarviointi?
                            </button>
                        </h3>
                        <div id="pricing2" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                Kyllä! Tarjoamme maksuttoman alkuarviointikeskustelun, jossa kartoitamme tarpeitanne 
                                ja ehdotamme sopivia ratkaisuja. Tämä antaa teille mahdollisuuden tutustua lähestymistapaaamme 
                                ja meille paremman kuvan projektin vaatimuksista.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricing3">
                                Millaisia maksuehtoja käytätte?
                            </button>
                        </h3>
                        <div id="pricing3" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                Maksuehdomme ovat joustavat projektin koon mukaan. Pienemmissä projekteissa maksu 
                                tyypillisesti projektin päätyttyä, suuremmissa projekteissa jako vaiheittain. 
                                Maksuaika on yleensä 14-30 päivää netto. Hyväksymme myös osittaisen ennakkomaksun.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pricing4">
                                Sisältyykö seurantajakso projektin hintaan?
                            </button>
                        </h3>
                        <div id="pricing4" class="accordion-collapse collapse" data-bs-parent="#pricingAccordion">
                            <div class="accordion-body">
                                Kaikki projektimme sisältävät 30 päivän takuuajan, jonka aikana teemme tarvittavat 
                                korjaukset maksutta. Pidemmät seurantajaksot ja jatkuva tuki on mahdollista sopia 
                                erikseen kuukausimaksullisena palveluna.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Questions -->
<section class="faq-section section-padding section-full-height bg-surface" id="process">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-2 fade-in-section">
                <img src="img/faq-prosessi.webp" alt="Projektin eteneminen visualisoituna vaiheittain" class="responsive-image" loading="lazy">
            </div>
            <div class="col-lg-6 order-lg-1">
                <span class="section-badge">Prosessiin liittyvät kysymykset</span>
                <h2 class="section-title">Miten yhteistyö käytännössä sujuu</h2>
                
                <div class="accordion" id="processAccordion">
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#process1" aria-expanded="true">
                                Tarvitaanko projektin aikana paljon resursseja yritykseltämme?
                            </button>
                        </h3>
                        <div id="process1" class="accordion-collapse collapse show" data-bs-parent="#processAccordion">
                            <div class="accordion-body">
                                Pyrimme minimoimaan häiriöt normaaliin toimintaan. Tarvitsemme yleensä yhteyshenkilön 
                                projektille sekä tarpeen mukaan aikaa avainhenkilöiltä haastatteluihin ja työpajoihin. 
                                Suunnittelemme aikataulun siten, että se sopii yrityksenne toimintaan ja resursseihin.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#process2">
                                Miten varmistatte henkilöstön sitoutumisen muutoksiin?
                            </button>
                        </h3>
                        <div id="process2" class="accordion-collapse collapse" data-bs-parent="#processAccordion">
                            <div class="accordion-body">
                                Henkilöstön osallistaminen on kriittinen menestystekijä. Järjestämme työpajoja, 
                                haastatteluita ja koulutuksia varmistamaan, että kaikki ymmärtävät muutosten hyödyt. 
                                Käytämme change management -menetelmiä ja pidämme säännöllisiä viestintätilaisuuksia 
                                projektin etenemisestä.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#process3">
                                Kuinka usein saatte raportit projektin etenemisestä?
                            </button>
                        </h3>
                        <div id="process3" class="accordion-collapse collapse" data-bs-parent="#processAccordion">
                            <div class="accordion-body">
                                Lähetämme viikoittaisen tilanneraportin projektin etenemisestä ja saavutetuista välitavoitteista. 
                                Pidämme myös kuukausittain statustapaamisen, jossa käymme läpi tuloksia ja mahdollisia 
                                muutostarpeita. Suuremmissa projekteissa myös väliraportit merkittävien vaiheiden päätteeksi.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#process4">
                                Voiko projektia muuttaa kesken toteutuksen?
                            </button>
                        </h3>
                        <div id="process4" class="accordion-collapse collapse" data-bs-parent="#processAccordion">
                            <div class="accordion-body">
                                Kyllä, ymmärrämme että liiketoiminnan tarpeet voivat muuttua. Pidämme projektin 
                                riittävän joustavana muutoksille, mutta merkittävät muutokset vaativat uuden 
                                sopimuksen ja mahdollisesti aikataulun tarkistuksen. Keskustelemme aina vaikutuksista 
                                ennen muutosten toteuttamista.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Questions -->
<section class="faq-section section-padding section-full-height" id="results">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 fade-in-section">
                <img src="img/faq-tulokset.webp" alt="Onnistuneita tuloksia esittävät graafit ja mittarit" class="responsive-image" loading="lazy">
            </div>
            <div class="col-lg-6">
                <span class="section-badge">Tuloksiin liittyvät kysymykset</span>
                <h2 class="section-title">Mitä voit odottaa yhteistyöstä</h2>
                
                <div class="accordion" id="resultsAccordion">
                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#results1" aria-expanded="true">
                                Millaisia tuloksia voin odottaa asiakaspalvelukonsultoinnista?
                            </button>
                        </h3>
                        <div id="results1" class="accordion-collapse collapse show" data-bs-parent="#resultsAccordion">
                            <div class="accordion-body">
                                Asiakkaamme ovat saavuttaneet keskimäärin 20-40% parannuksia asiakastyytyväisyydessä, 
                                15-30% tehokkuuden kasvua ja 25-35% lyhyempiä vastausaikoja. Tarkat tulokset riippuvat 
                                lähtötilanteesta, tavoitteista ja toteutuksen laadusta. Määrittelemme mitattavat tavoitteet 
                                projektin alussa.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#results2">
                                Miten varmistatte tulosten pysyvyyden?
                            </button>
                        </h3>
                        <div id="results2" class="accordion-collapse collapse" data-bs-parent="#resultsAccordion">
                            <div class="accordion-body">
                                Keskitymme luomaan kestäviä muutoksia kouluttamalla henkilöstöä, dokumentoimalla prosessit 
                                ja luomalla mittareita seurantaa varten. Tarjoamme myös jälkiseurantaa ja tukea 
                                varmistaaksemme, että parannukset säilyvät pitkällä aikavälillä. Suosittelemme 
                                vuosittaisia tarkistuksia.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#results3">
                                Milloin ensimmäiset tulokset ovat näkyvissä?
                            </button>
                        </h3>
                        <div id="results3" class="accordion-collapse collapse" data-bs-parent="#resultsAccordion">
                            <div class="accordion-body">
                                Ensimmäiset positiiviset muutokset ovat usein havaittavissa 2-4 viikon sisällä projektin 
                                aloittamisesta, erityisesti prosessimuutosten osalta. Merkittävät parannukset 
                                asiakastyytyväisyydessä näkyvät tyypillisesti 6-12 viikon kuluttua. Pitkän aikavälin 
                                vaikutukset konkretisoituvat 3-6 kuukaudessa.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item fade-in-section">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#results4">
                                Mitä tapahtuu jos tavoitteita ei saavuteta?
                            </button>
                        </h3>
                        <div id="results4" class="accordion-collapse collapse" data-bs-parent="#resultsAccordion">
                            <div class="accordion-body">
                                Määrittelemme realistiset tavoitteet projektin alussa yhdessä asiakkaan kanssa. 
                                Jos tavoitteita ei saavuteta sovitussa ajassa, jatkamme työtä lisämaksutta kunnes 
                                tavoitteet saavutetaan, tai sopimme vaihtoehtoisen lähestymistavan. Asiakastyytyväisyys 
                                on meille tärkeintä.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="contact-cta section-padding section-full-height bg-surface">
    <div class="container">
        <div class="text-center fade-in-section">
            <span class="section-badge">Etkö löytänyt vastausta?</span>
            <h2>Kysy meiltä suoraan</h2>
            <p class="section-description">
                Jos et löytänyt vastausta kysymykseesi, ota yhteyttä. Vastaamme kaikkiin kysymyksiin henkilökohtaisesti ja autamme löytämään parhaan ratkaisun tarpeisiinne.
            </p>
            <div class="cta-actions">
                <a href="contact.php" class="btn btn-primary btn-lg me-3">Lähetä kysymys</a>
                <a href="services.php" class="btn btn-outline-primary btn-lg">Tutustu palveluihin</a>
            </div>
            <div class="mt-4">
                <img src="img/faq-yhteystiedot.webp" alt="Ystävällinen asiakaspalvelutiimi odottaa kysymyksiäsi" class="responsive-image" style="max-width: 400px;" loading="lazy">
            </div>
        </div>
    </div>
</section>

<style>
.nav-pills-wrapper {
    background: var(--white);
    padding: 1rem;
    border-radius: var(--border-radius);
    box-shadow: 0 4px 20px var(--shadow);
}

.nav-pills .nav-link {
    color: var(--muted);
    border-radius: var(--border-radius-sm);
    padding: 0.75rem 1.5rem;
    margin: 0 0.25rem;
    transition: var(--transition);
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link.active {
    background: var(--primary);
    color: var(--white);
}

.faq-section {
    scroll-margin-top: 100px;
}

.cta-actions {
    margin: 2rem 0;
}

@media (max-width: 768px) {
    .nav-pills .nav-link {
        font-size: 0.875rem;
        padding: 0.5rem 1rem;
        margin: 0.25rem;
    }
    
    .cta-actions .btn {
        display: block;
        width: 100%;
        max-width: 300px;
        margin: 0 auto 1rem;
    }
}
</style>

<script>
// Smooth scrolling for FAQ navigation
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('#faq-nav .nav-link');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            
            // Add active class to clicked link
            this.classList.add('active');
            
            // Scroll to target section
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerHeight = document.getElementById('main-header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>

<?php include 'partials/footer.php'; ?>