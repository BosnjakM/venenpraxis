<?php
$PAGE_TITLE = 'Venen, Angiologie | Praxis für Gefässmedizin in Zürich';
$PAGE_DESC  = 'Dr. med. et phil. Janine Dörffler-Melly – FMH für Angiologie und Innere Medizin. Ihre Spezialistin für Krampfadern und Durchblutungsstörungen in Zürich.';
require __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section class="hero" style="background-image:url('assets/img/Pr3IMG_0979-scaled.jpg')">
    <div class="container hero__inner">
        <div class="hero__box">
            <h1>Frau Dr. med. et phil. Janine Dörffler-Melly</h1>
            <p class="hero__sub">FMH für Angiologie und Innere Medizin</p>
            <p class="hero__creds">
                <b>Fähigkeitsausweise:</b> Dosisintensives Röntgen und periphere endoluminale Katheterinterventionen<br>
                Hitzeablation mit Laser- oder Radiofrequenzkatheter von Krampfadern<br>
                Schweizerische Akademie für Psychosoziale und Psychosomatische Medizin SAPPM
            </p>
            <p class="hero__spec">Ihre Spezialistin für Krampfadern und Durchblutungsstörungen</p>
            <a href="ueber-uns.php" class="btn">Mehr erfahren</a>
        </div>
    </div>
</section>

<!-- BEHANDLUNGSKARTEN -->
<section class="section">
    <div class="container">
        <div class="cards">
            <article class="card">
                <div class="card__media"><img src="assets/img/Bild10b.png" alt="Krampfadern"></div>
                <div class="card__body">
                    <h3>Krampfadern</h3>
                    <ul class="card__list"><li>Krampfadern</li><li>Oberflächliche Venenentzündung</li><li>Besenreiser</li></ul>
                    <a href="krampfadern-varizen.php" class="btn">Mehr erfahren</a>
                </div>
            </article>
            <article class="card">
                <div class="card__media"><img src="assets/img/11b.png" alt="Dickes Bein"></div>
                <div class="card__body">
                    <h3>Dickes Bein</h3>
                    <ul class="card__list"><li>Tiefe Beinvenenthrombose</li><li>Lungenembolie</li><li>Andere Ursachen</li></ul>
                    <a href="geschwollenes-bein.php" class="btn">Mehr erfahren</a>
                </div>
            </article>
            <article class="card">
                <div class="card__media"><img src="assets/img/Bild9b.png" alt="PAVK"></div>
                <div class="card__body">
                    <h3>PAVK</h3>
                    <ul class="card__list"><li>Raucherbein</li><li>Schaufensterkrankheit</li></ul>
                    <a href="pavk.php" class="btn">Mehr erfahren</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- KONTAKT-BAND -->
<section class="contactband">
    <div class="container contactband__grid">
        <div class="contactband__col">
            <svg viewBox="0 0 24 24" width="30" height="30"><path fill="currentColor" d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .7-.2 1l-2.3 2.2z"/></svg>
            <div><h4>Telefon</h4><p><a href="tel:<?= $SITE['phone_raw'] ?>"><?= $SITE['phone'] ?></a></p></div>
        </div>
        <div class="contactband__col">
            <svg viewBox="0 0 24 24" width="30" height="30"><path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
            <div><h4><?= htmlspecialchars($SITE['name']) ?></h4><p><?= htmlspecialchars($SITE['street']) ?>, <?= htmlspecialchars($SITE['zip_city']) ?></p></div>
        </div>
        <div class="contactband__col">
            <svg viewBox="0 0 24 24" width="30" height="30"><path fill="currentColor" d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 10.4 4 2.3-.8 1.4L11 13V6h2z"/></svg>
            <div><h4>Termin buchen</h4><p><a href="kontakt.php">Jetzt online Termin buchen</a></p></div>
        </div>
    </div>
</section>

<!-- INTRO + METHODEN -->
<section class="section section--soft">
    <div class="container">
        <div class="intro__grid">
            <div class="intro__photo">
                <img src="assets/img/Janine.png" alt="Dr. med. et phil. Janine Dörffler-Melly">
            </div>
            <div class="intro__text">
                <span class="intro__eyebrow">Dr. med. et phil. Janine Dörffler-Melly</span>
                <span class="intro__rule"></span>
                <h2>Angiologie</h2>
                <p class="intro__red">Praxis für Gefässmedizin<br>Angiobellaria AG</p>
                <p>Als Angiologin bin ich auf die Abklärung und die Behandlung von Gefässerkrankungen sowie auf deren Vorbeugung spezialisiert. Ich setze nebst dem ausführlichen Gespräch und der medizinischen Untersuchung die modernsten Mittel und Methoden ein, um Sie als Patientin und Patienten möglichst schonend abzuklären und zu behandeln.</p>
                <div class="intro__video">
                    <div class="ratio">
                        <iframe src="https://www.youtube.com/embed/gjRiInpM82g" title="Praxis für Gefässmedizin – Dr. Janine Dörffler-Melly" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <ul class="methods">
            <?php foreach ([
                'Knöcheldruckmessung','Pulskurvenmessung','Fotoplethysmographie','Ultraschall der Blutgefässe',
                'Kontrastmitteldarstellung der Arterien','Kontrastmitteldarstellung der Venen',
                'Ballon-Kathetertherapie mit und ohne Stents','Venenentfernung','Venenverödung','Moderne Wundversorgung',
            ] as $m): ?>
                <li><?= $m ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
