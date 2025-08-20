<?php
include_once 'config.php';
include 'partials/header.php';
?>

<section class="page-header section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center fade-in-section">
                <h1 class="section-title">Evästekäytäntö</h1>
                <p class="section-description">
                    Päivitetty: <?php echo date('d.m.Y', strtotime('-2 days')); ?>
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

                    <h2>1. Mitä evästeet ovat?</h2>
                    <p>
                        Evästeet (cookies) ovat pieniä tekstitiedostoja, jotka verkkosivustot 
                        tallentavat käyttäjän laitteelle sivuston käytön aikana. Evästeet 
                        auttavat sivustoja muistamaan käyttäjän toimintoja ja mieltymyksiä.
                    </p>

                    <h2>2. Miten käytämme evästeitä?</h2>
                    <p>
                        Käytämme evästeitä parantaaksemme sivustomme toimivuutta, 
                        analysoidaksemme käyttöä ja tarjotaksemme paremman käyttökokemuksen.
                    </p>

                    <h2>3. Evästeiden kategoriat</h2>

                    <h3>3.1 Välttämättömät evästeet</h3>
                    <p>
                        Nämä evästeet ovat välttämättömiä sivuston perustoiminnoille ja 
                        ne ladataan automaattisesti.
                    </p>
                    <ul>
                        <li><strong>Istuntoevästeet:</strong> Mahdollistavat sivuston normaalin toiminnan</li>
                        <li><strong>Tietoturvaevästeet:</strong> Suojaavat lomakkeiden lähetyksiä</li>
                        <li><strong>Kieliasetukset:</strong> Muistavat valitsemasi kielen</li>
                        <li><strong>Evästeasetukset:</strong> Muistavat evästemieltymyksesi</li>
                    </ul>

                    <h3>3.2 Analytiikkaevästeet</h3>
                    <p>
                        Näiden evästeiden avulla keräämme tietoa sivuston käytöstä 
                        (vaatii suostumuksen).
                    </p>
                    <ul>
                        <li><strong>Kävijätilastot:</strong> Kuinka monta käyttäjää sivustolla vierailee</li>
                        <li><strong>Sivukäynnit:</strong> Mitkä sivut ovat suosituimpia</li>
                        <li><strong>Käyttäytyminen:</strong> Miten käyttäjät navigoivat sivustolla</li>
                        <li><strong>Teknisiä tietoja:</strong> Käytetyt laitteet ja selaimet</li>
                    </ul>

                    <h3>3.3 Markkinointievästeet</h3>
                    <p>
                        Näitä evästeitä käytetään kohdistetun mainonnan näyttämiseen 
                        (vaatii suostumuksen).
                    </p>
                    <ul>
                        <li><strong>Mainosprofiilit:</strong> Kiinnostuksen kohteiden tunnistaminen</li>
                        <li><strong>Uudelleenmarkkinointi:</strong> Relevanttien mainosten näyttäminen</li>
                        <li><strong>Sosiaalinen media:</strong> Jakojen ja tykkäysten seuranta</li>
                    </ul>

                    <h2>4. Kolmansien osapuolten evästeet</h2>
                    <p>
                        Sivustomme voi käyttää kolmansien osapuolten palveluita, 
                        jotka asettavat omia evästeitään:
                    </p>
                    <ul>
                        <li><strong>Google Fonts:</strong> Kirjasinten lataaminen</li>
                        <li><strong>Bootstrap CDN:</strong> Tyylitiedostojen lataaminen</li>
                    </ul>

                    <h2>5. Evästeiden säilytysaika</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Evästeen tyyppi</th>
                                    <th>Säilytysaika</th>
                                    <th>Tarkoitus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Istuntoevästeet</td>
                                    <td>Istunnon loppuun</td>
                                    <td>Perustoiminnot</td>
                                </tr>
                                <tr>
                                    <td>Pysyvät evästeet</td>
                                    <td>1-12 kuukautta</td>
                                    <td>Asetukset ja mieltymykset</td>
                                </tr>
                                <tr>
                                    <td>Analytiikkaevästeet</td>
                                    <td>2 vuotta</td>
                                    <td>Käyttötilastot</td>
                                </tr>
                                <tr>
                                    <td>Markkinointievästeet</td>
                                    <td>6-12 kuukautta</td>
                                    <td>Kohdistettu mainonta</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2>6. Evästeiden hallinta</h2>
                    <p>
                        Voit hallita evästeasetuksiasi seuraavilla tavoilla:
                    </p>
                    <ul>
                        <li><strong>Evästebanneri:</strong> Valitse asetukset sivuston käytön aikana</li>
                        <li><strong>Selaimen asetukset:</strong> Muuta evästeasetuksia selaimessasi</li>
                        <li><strong>Opt-out työkalut:</strong> Estä analytiikka- ja markkinointievästeet</li>
                    </ul>

                    <h2>7. Suostumuksen peruuttaminen</h2>
                    <p>
                        Voit peruuttaa evästetsuostumuksesi milloin tahansa:
                    </p>
                    <ul>
                        <li>Klikkaa "Hallitse evästeitä" -painiketta sivuston alareunassa</li>
                        <li>Muuta selaimen evästeasetuksia</li>
                        <li>Ota yhteyttä: <?php echo htmlspecialchars($site_config['email']); ?></li>
                    </ul>

                    <h2>8. Evästeiden estäminen</h2>
                    <p>
                        Voit estää evästeet selaimen asetuksista. Huomaa, että evästeiden 
                        estäminen voi vaikuttaa sivuston toimivuuteen.
                    </p>

                    <h3>Evästeiden poisto eri selaimissa:</h3>
                    <ul>
                        <li><strong>Chrome:</strong> Asetukset → Tietosuoja ja turvallisuus → Tyhjennä selausdata</li>
                        <li><strong>Firefox:</strong> Asetukset → Tietosuoja ja turvallisuus → Evästeet ja sivustotiedot</li>
                        <li><strong>Safari:</strong> Asetukset → Tietosuoja → Hallitse verkkosivustotietoja</li>
                        <li><strong>Edge:</strong> Asetukset → Tietosuoja, haku ja palvelut → Tyhjennä selausdata</li>
                    </ul>

                    <h2>9. Yhteystiedot</h2>
                    <p>
                        Kysymykset evästekäytännöstä voit lähettää osoitteeseen: 
                        <?php echo htmlspecialchars($site_config['email']); ?>
                    </p>

                    <div class="policy-footer">
                        <p><strong>Tämä evästekäytäntö on viimeksi päivitetty <?php echo date('d.m.Y', strtotime('-2 days')); ?>.</strong></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="cookie-settings section-padding bg-surface">
    <div class="container">
        <div class="text-center fade-in-section">
            <h2>Hallitse evästeasetuksiasi</h2>
            <p class="section-description">
                Voit muuttaa evästeasetuksiasi milloin tahansa alla olevasta painikkeesta.
            </p>
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#cookieModal">
                Hallitse evästeitä
            </button>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>