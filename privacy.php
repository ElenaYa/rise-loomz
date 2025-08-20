<?php
include_once 'config.php';
include 'partials/header.php';
?>

<section class="page-header section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center fade-in-section">
                <h1 class="section-title">Tietosuojaseloste</h1>
                <p class="section-description">
                    Päivitetty: <?php echo date('d.m.Y', strtotime('-7 days')); ?>
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
                    
                    <h2>1. Rekisterinpitäjä</h2>
                    <p>
                        <strong><?php echo htmlspecialchars($site_config['company_name']); ?></strong><br>
                        Sähköposti: <?php echo htmlspecialchars($site_config['email']); ?>
                    </p>

                    <h2>2. Henkilötietojen käsittelyn tarkoitus</h2>
                    <p>
                        Keräämme ja käsittelemme henkilötietojasi seuraaviin tarkoituksiin:
                    </p>
                    <ul>
                        <li>Yhteydenottojen käsittely ja asiakaspalvelu</li>
                        <li>Palveluidemme tarjoaminen ja parantaminen</li>
                        <li>Uutiskirjeen lähettäminen (suostumuksesi perusteella)</li>
                        <li>Lakisääteisten velvoitteiden täyttäminen</li>
                        <li>Sivuston toimivuuden ja turvallisuuden varmistaminen</li>
                    </ul>

                    <h2>3. Käsiteltävät henkilötiedot</h2>
                    <p>Voimme käsitellä seuraavia henkilötietoja:</p>
                    <ul>
                        <li>Yhteystiedot: sähköpostiosoite</li>
                        <li>Yritystiedot: yrityksen nimi, toimiala, koko</li>
                        <li>Teknisiä tietoja: IP-osoite, selaintiedot, evästeet</li>
                        <li>Viestintätiedot: lähettämäsi viestit ja yhteydenotot</li>
                    </ul>

                    <h2>4. Henkilötietojen käsittelyn oikeusperusteet</h2>
                    <p>Käsittelemme henkilötietojasi seuraavilla oikeusperusteilla:</p>
                    <ul>
                        <li><strong>Suostumus (GDPR 6(1)(a)):</strong> Uutiskirje ja vapaaehtoinen tietojen antaminen</li>
                        <li><strong>Oikeutettu etu (GDPR 6(1)(f)):</strong> Asiakaspalvelu ja liiketoiminnan harjoittaminen</li>
                        <li><strong>Lakisääteinen velvoite (GDPR 6(1)(c)):</strong> Kirjanpito ja muut lakisääteiset velvoitteet</li>
                    </ul>

                    <h2>5. Henkilötietojen säilytysaika</h2>
                    <p>Säilytämme henkilötietojasi seuraavasti:</p>
                    <ul>
                        <li>Yhteydenottotiedot: 3 vuotta viimeisestä kontaktista</li>
                        <li>Uutiskirjeen tilaajatiedot: kunnes perut tilauksen</li>
                        <li>Evästetiedot: evästekäytännön mukaisesti</li>
                        <li>Lakisääteiset velvoitteet: lakien edellyttämän ajan</li>
                    </ul>

                    <h2>6. Henkilötietojen luovuttaminen</h2>
                    <p>
                        Emme luovuta henkilötietojasi kolmansille osapuolille ilman suostumustasi, 
                        paitsi seuraavissa tilanteissa:
                    </p>
                    <ul>
                        <li>Lakisääteisen velvoitteen täyttämiseksi</li>
                        <li>Viranomaisten pyynnöstä lain edellyttämissä tilanteissa</li>
                        <li>Palveluntarjoajille teknisen toiminnallisuuden varmistamiseksi (käsittelysopimuksen perusteella)</li>
                    </ul>

                    <h2>7. Henkilötietojen suojaus</h2>
                    <p>
                        Suojaamme henkilötietojasi asianmukaisin teknisin ja organisatorisin toimenpitein:
                    </p>
                    <ul>
                        <li>SSL-salaus tiedonsiirron suojaamiseksi</li>
                        <li>Rajoitettu pääsy henkilötietoihin</li>
                        <li>Säännölliset tietoturvapäivitykset</li>
                        <li>Varmuuskopiointi ja tietojen palautus</li>
                    </ul>

                    <h2>8. Rekisteröidyn oikeudet</h2>
                    <p>Sinulla on seuraavat oikeudet henkilötietojesi käsittelyyn liittyen:</p>
                    <ul>
                        <li><strong>Tarkastusoikeus:</strong> Oikeus saada tieto käsiteltävistä henkilötiedoista</li>
                        <li><strong>Oikaisuoikeus:</strong> Oikeus korjata virheelliset tai puutteelliset tiedot</li>
                        <li><strong>Poisto-oikeus:</strong> Oikeus vaatia tietojen poistamista tietyissä tilanteissa</li>
                        <li><strong>Käsittelyn rajoittaminen:</strong> Oikeus rajoittaa käsittelyä tietyissä tilanteissa</li>
                        <li><strong>Siirrettävyys:</strong> Oikeus saada tiedot koneluettavassa muodossa</li>
                        <li><strong>Vastustamisoikeus:</strong> Oikeus vastustaa käsittelyä tietyissä tilanteissa</li>
                        <li><strong>Suostumuksen peruuttaminen:</strong> Oikeus peruuttaa antamasi suostumus</li>
                    </ul>

                    <h2>9. Evästeet</h2>
                    <p>
                        Sivustomme käyttää evästeitä käyttökokemuksen parantamiseksi. 
                        Lisätietoja evästeiden käytöstä löydät <a href="cookies.php">evästekäytännöstämme</a>.
                    </p>

                    <h2>10. Valvontaviranomainen</h2>
                    <p>
                        Tietosuojavaltuutetun toimisto toimii henkilötietojen käsittelyn valvontaviranomaisena Suomessa. 
                        Voit tehdä valituksen tietosuojavaltuutetulle, jos katsot henkilötietojesi käsittelyn olevan lainvastaista.
                    </p>
                    <p>
                        <strong>Tietosuojavaltuutetun toimisto</strong><br>
                        Käyntiosoite: Ratapihantie 9, 6. krs, 00520 Helsinki<br>
                        Postiosoite: PL 800, 00521 Helsinki<br>
                        Puhelin: 029 566 6700<br>
                        Sähköposti: tietosuoja@om.fi
                    </p>

                    <h2>11. Yhteystiedot</h2>
                    <p>
                        Jos sinulla on kysymyksiä tietosuojaselosteesta tai haluat käyttää oikeuksiasi, 
                        ota yhteyttä:
                    </p>
                    <p>
                        <strong>Sähköposti:</strong> <?php echo htmlspecialchars($site_config['email']); ?>
                    </p>

                    <h2>12. Tietosuojaselosteen muutokset</h2>
                    <p>
                        Pidätämme oikeuden päivittää tätä tietosuojaselostetta tarpeen mukaan. 
                        Ilmoitamme merkittävistä muutoksista asianmukaisella tavalla.
                    </p>

                    <div class="policy-footer">
                        <p><strong>Tämä tietosuojaseloste on viimeksi päivitetty <?php echo date('d.m.Y', strtotime('-7 days')); ?>.</strong></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>