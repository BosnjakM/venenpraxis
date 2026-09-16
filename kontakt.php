<?php
require __DIR__ . '/includes/config.php';

$sent = false; $error = ''; $old = ['name' => '', 'email' => '', 'phone' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($old as $k => $_) { $old[$k] = trim($_POST[$k] ?? ''); }

    if ($old['name'] === '' || $old['email'] === '' || $old['message'] === '') {
        $error = 'Bitte füllen Sie Name, E-Mail und Nachricht aus.';
    } elseif (!filter_var($old['email'], FILTER_VALIDATE_EMAIL)) {
        $error = 'Bitte geben Sie eine gültige E-Mail-Adresse an.';
    } else {
        // Nachricht per E-Mail an die Praxis senden.
        // Hinweis: Für den produktiven Versand muss auf dem Server ein Mailer/SMTP konfiguriert sein.
        $to      = $SITE['email'];
        $subject = 'Neue Kontaktanfrage über die Website';
        $body    = "Name: {$old['name']}\nE-Mail: {$old['email']}\nTelefon: {$old['phone']}\n\nNachricht:\n{$old['message']}\n";
        $headers = "From: website@angiobellaria.ch\r\nReply-To: {$old['email']}\r\n";
        @mail($to, $subject, $body, $headers);

        $sent = true;
        $old = ['name' => '', 'email' => '', 'phone' => '', 'message' => ''];
    }
}

$PAGE_TITLE = 'Kontakt & Termin | Praxis für Gefässmedizin Angiobellaria Zürich';
$PAGE_DESC  = 'Kontaktieren Sie die Praxis für Gefässmedizin Angiobellaria in Zürich – Telefon, E-Mail und Online-Terminanfrage.';
require __DIR__ . '/includes/header.php';
?>

<section class="pagehero" style="background-image:url('assets/img/Pr3IMG_0979-scaled.jpg')">
    <div class="container pagehero__inner">
        <div class="breadcrumb"><a href="index.php">Home</a> / Kontakt</div>
        <h1>Einfach in Kontakt treten</h1>
        <p class="pagehero__sub">Schreiben Sie uns eine Nachricht oder rufen Sie uns an – wir freuen uns auf Sie.</p>
    </div>
</section>

<section class="article">
    <div class="container contact__grid">
        <div>
            <h2>Schreiben Sie uns eine Nachricht</h2>
            <?php if ($sent): ?>
                <div class="alert alert--ok">Vielen Dank für Ihre Nachricht! Wir melden uns so bald wie möglich bei Ihnen.</div>
            <?php elseif ($error): ?>
                <div class="alert alert--err"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <form class="form" method="post" action="kontakt.php#form" id="form" novalidate>
                <div class="form__field">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" value="<?= htmlspecialchars($old['name']) ?>" required>
                </div>
                <div class="form__field">
                    <label for="email">E-Mail *</label>
                    <input type="email" id="email" name="email" value="<?= htmlspecialchars($old['email']) ?>" required>
                </div>
                <div class="form__field">
                    <label for="phone">Telefon</label>
                    <input type="tel" id="phone" name="phone" value="<?= htmlspecialchars($old['phone']) ?>">
                </div>
                <div class="form__field">
                    <label for="message">Ihre Nachricht *</label>
                    <textarea id="message" name="message" required><?= htmlspecialchars($old['message']) ?></textarea>
                </div>
                <p class="form__note">* Pflichtfelder. Ihre Daten werden vertraulich behandelt.</p>
                <button type="submit" class="btn btn--solid">Absenden</button>
            </form>
        </div>

        <div>
            <div class="info-list">
                <div class="info-list__item">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .7-.2 1l-2.3 2.2z"/></svg>
                    <div><h3>Telefon &amp; Fax</h3><p><a href="tel:<?= $SITE['phone_raw'] ?>"><?= $SITE['phone'] ?></a><br>Fax: <?= htmlspecialchars($SITE['fax']) ?></p></div>
                </div>
                <div class="info-list__item">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <div><h3>E-Mail</h3><p><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></p></div>
                </div>
                <div class="info-list__item">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
                    <div><h3>Adresse</h3><p><?= htmlspecialchars($SITE['name']) ?> Angiobellaria AG<br><?= htmlspecialchars($SITE['street']) ?>, <?= htmlspecialchars($SITE['zip_city']) ?></p></div>
                </div>
                <div class="info-list__item">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 10.4 4 2.3-.8 1.4L11 13V6h2z"/></svg>
                    <div><h3>Sprechstunden</h3><p>Mo, Di, Mi &amp; Freitag: 08:00 – 17:00 Uhr<br>Donnerstag: 08:00 – 12:00 Uhr</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
