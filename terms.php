<?php
include_once 'config.php';
include 'partials/header.php';
?>

<section class="page-header section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center fade-in-section">
                <h1 class="section-title">Käyttöehdot</h1>
                <p class="section-description">
                    Päivitetty: <?php echo date('d.m.Y', strtotime('-5 days')); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="policy-content section-padding section-full-height">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="policy-document fade-in-section">

                    <h2>1. Yleistä</h2>
                    <p>
                        Nämä käyttöehdot koskevat <?php echo htmlspecialchars($site_config['company_name']); ?>:n 
                        verkkosivuston käyttöä ja palveluidemme tilaamista. Käyttämällä sivustoamme hyväksyt 
                        nämä käyttöehdot.
                    </p>

                    <h2>2. Palveluntarjoaja</h2>
                    <p>
                        <strong><?php echo htmlspecialchars($site_config['company_name']); ?></strong><br>
                        Sähköposti: <?php echo htmlspecialchars($site_config['email']); ?>
                    </p>

                    <h2>3. Sivuston käyttö</h2>
                    <p>Sivuston käyttäjä sitoutuu:</p>
                    <ul>
                        <li>Käyttämään sivustoa vain laillisiin tarkoituksiin</li>
                        <li>Noudattamaan voimassa olevia lakeja ja asetuksia</li>
                        <li>Olemaan aiheuttamatta vahinkoa sivustolle tai sen käyttäjille</li>
                        <li>Olemaan lähettämättä roskapostia tai haitallista sisältöä</li>
                        <li>Kunnioittamaan tekijänoikeuksia ja muita immateriaalioikeuksia</li>
                    </ul>

                    <h2>4. Palvelujen tilaaminen</h2>
                    <p>
                        Palvelujemme tilaaminen edellyttää kirjallista sopimusta. Yhteydenotto 
                        sivuston kautta ei sido kumpaakaan osapuolta sopimukseen.
                    </p>
                    <ul>
                        <li>Tarjoukset ovat voimassa 30 päivää ellei toisin mainita</li>
                        <li>Hinnat sisältävät arvonlisäveron ellei toisin mainita</li>
                        <li>Maksuehto on 14 päivää netto ellei toisin sovita</li>
                        <li>Viivästyskorko on 8% + viitekorko</li>
                    </ul>

                    <h2>5. Immateriaalioikeudet</h2>
                    <p>
                        Sivuston sisältö on tekijänoikeuslailla suojattua. Sivuston sisältöä 
                        saa käyttää vain henkilökohtaiseen, ei-kaupalliseen tarkoitukseen.
                    </p>
                    <ul>
                        <li>Sisällön kopiointi tai jakelu on kielletty ilman lupaa</li>
                        <li>Logot ja tavaramerkit ovat omistajiensa omaisuutta</li>
                        <li>Automaattinen tiedon keruu on kielletty</li>
                    </ul>

                    <h2>6. Vastuuvapauslauseke</h2>
                    <p>
                        Pyrimme pitämään sivuston tiedot ajan tasalla, mutta emme vastaa 
                        tietojen virheellisyydestä tai puutteellisuudesta.
                    </p>
                    <ul>
                        <li>Sivusto tarjotaan "sellaisenaan" ilman takuita</li>
                        <li>Emme vastaa välillisistä tai välittömistä vahingoista</li>
                        <li>Käyttäjä käyttää sivustoa omalla vastuullaan</li>
                        <li>Sivusto voi olla tilapäisesti poissa käytöstä huollon vuoksi</li>
                    </ul>

                    <h2>7. Linkit kolmansien osapuolten sivustoille</h2>
                    <p>
                        Sivustomme voi sisältää linkkejä kolmansien osapuolten sivustoille. 
                        Emme vastaa näiden sivustojen sisällöstä tai tietosuojakäytännöistä.
                    </p>

                    <h2>8. Tietosuoja</h2>
                    <p>
                        Henkilötietojen käsittely tapahtuu tietosuojaselosteeemme mukaisesti. 
                        Katso lisätietoja <a href="privacy.php">tietosuojaselosteestamme</a>.
                    </p>

                    <h2>9. Evästeet</h2>
                    <p>
                        Sivustomme käyttää evästeitä. Lisätietoja evästeiden käytöstä 
                        löydät <a href="cookies.php">evästekäytännöstämme</a>.
                    </p>

                    <h2>10. Käyttöehtojen muutokset</h2>
                    <p>
                        Pidätämme oikeuden muuttaa näitä käyttöehtoja. Merkittävistä 
                        muutoksista ilmoitamme sivustolla.
                    </p>

                    <h2>11. Sovellettava laki ja riidanratkaisu</h2>
                    <p>
                        Näihin käyttöehtoihin sovelletaan Suomen lakia. Mahdolliset 
                        riitaisuudet ratkaistaan Suomen tuomioistuimissa.
                    </p>

                    <h2>12. Yhteystiedot</h2>
                    <p>
                        Kysymykset käyttöehdoista voit lähettää osoitteeseen: 
                        <?php echo htmlspecialchars($site_config['email']); ?>
                    </p>

                    <div class="policy-footer">
                        <p><strong>Nämä käyttöehdot ovat viimeksi päivitetty <?php echo date('d.m.Y', strtotime('-5 days')); ?>.</strong></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>