<?php
include_once 'config.php';
include 'partials/header.php';
?>

<section class="page-header section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center fade-in-section">
                <h1 class="section-title">Vastuuvapauslauseke</h1>
                <p class="section-description">
                    Päivitetty: <?php echo date('d.m.Y', strtotime('-3 days')); ?>
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

                    <h2>1. Yleinen vastuuvapauslauseke</h2>
                    <p>
                        <?php echo htmlspecialchars($site_config['company_name']); ?> tarjoaa 
                        asiakaspalvelukonsultointipalveluita parhaan kykynsä mukaan. Emme kuitenkaan 
                        voi taata tiettyjä tuloksia tai tuottoja.
                    </p>

                    <h2>2. Palvelujen laatu ja tulokset</h2>
                    <p>
                        Vaikka pyrimme aina parhaaseen mahdolliseen lopputulokseen, asiakaspalvelun 
                        parantaminen riippuu monista tekijöistä:
                    </p>
                    <ul>
                        <li>Asiakkaan sitoutuminen muutoksiin</li>
                        <li>Organisaation kulttuuri ja muutoshalukkuus</li>
                        <li>Markkinaolosuhteet ja kilpailutilanne</li>
                        <li>Käytettävissä olevat resurssit</li>
                        <li>Ulkoiset tekijät, joihin emme voi vaikuttaa</li>
                    </ul>

                    <h2>3. Tietojen tarkkuus</h2>
                    <p>
                        Sivustomme tiedot perustuvat parhaaseen saatavilla olevaan tietoomme 
                        julkaisuhetkellä. Emme vastaa:
                    </p>
                    <ul>
                        <li>Tietojen virheellisyydestä tai puutteellisuudesta</li>
                        <li>Tietojen vanhenemisesta</li>
                        <li>Kolmansien osapuolten toimittamien tietojen paikkansapitävyydestä</li>
                        <li>Tietojen tulkinnan aiheuttamista vahingoista</li>
                    </ul>

                    <h2>4. Taloudellinen vastuu</h2>
                    <p>
                        Emme vastaa välillisistä tai välittömistä vahingoista, jotka voivat 
                        aiheutua sivuston käytöstä tai palvelujemme käyttämisestä:
                    </p>
                    <ul>
                        <li>Liiketoiminnan keskeytymisestä</li>
                        <li>Tulojen menetyksestä</li>
                        <li>Datan menettämisestä</li>
                        <li>Muista välillisistä vahingoista</li>
                    </ul>

                    <h2>5. Kolmansien osapuolten palvelut</h2>
                    <p>
                        Saatamme suositella kolmansien osapuolten palveluita tai tuotteita. 
                        Emme vastaa näiden palveluiden laadusta tai soveltuvuudesta.
                    </p>

                    <h2>6. Tekninen toimivuus</h2>
                    <p>
                        Emme vastaa sivuston teknisistä ongelmista tai käyttökatkoksista:
                    </p>
                    <ul>
                        <li>Palvelinkatkoksista</li>
                        <li>Internet-yhteyden ongelmista</li>
                        <li>Selaimen yhteensopivuusongelmista</li>
                        <li>Tietoturvaloukkauksista ulkopuolisten toimesta</li>
                    </ul>

                    <h2>7. Neuvonanto</h2>
                    <p>
                        Sivustomme sisältö on yleistä tietoa asiakaspalvelukonsultoinnista. 
                        Se ei ole:
                    </p>
                    <ul>
                        <li>Juridista neuvontaa</li>
                        <li>Taloudellista neuvontaa</li>
                        <li>Yksilöllistä konsultointia</li>
                        <li>Sitoumusta tiettyihin tuloksiin</li>
                    </ul>

                    <h2>8. Asiakasviittaukset ja case-esimerkit</h2>
                    <p>
                        Sivustolla esitetyt tulokset ja esimerkit ovat todellisia, mutta 
                        menneisyydessä saavutetut tulokset eivät takaa vastaavia tuloksia tulevaisuudessa.
                    </p>

                    <h2>9. Vastuun rajoitus</h2>
                    <p>
                        Kokonaisvastumme on joka tapauksessa rajoitettu maksettujen palkkioiden määrään 
                        kyseisessä projektissa.
                    </p>

                    <h2>10. Sovellettava laki</h2>
                    <p>
                        Tämä vastuuvapauslauseke on laadittu Suomen lain mukaisesti ja sitä 
                        tulkitaan Suomen lain mukaan.
                    </p>

                    <h2>11. Yhteystiedot</h2>
                    <p>
                        Kysymykset vastuuvapauslausekkeesta voit lähettää osoitteeseen: 
                        <?php echo htmlspecialchars($site_config['email']); ?>
                    </p>

                    <div class="policy-footer">
                        <p><strong>Tämä vastuuvapauslauseke on viimeksi päivitetty <?php echo date('d.m.Y', strtotime('-3 days')); ?>.</strong></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>