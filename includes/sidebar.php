<aside class="sidebar">
    <div class="side-card">
        <h3>Praxis für Gefässmedizin</h3>
        <div class="side-card__row">
            <svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
            <span><b>Angiobellaria AG</b><?= htmlspecialchars($SITE['street']) ?>, <?= htmlspecialchars($SITE['zip_city']) ?></span>
        </div>
        <div class="side-card__row">
            <svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .7-.2 1l-2.3 2.2z"/></svg>
            <span><b>Telefon / Fax</b><a href="tel:<?= $SITE['phone_raw'] ?>"><?= $SITE['phone'] ?></a><br><?= htmlspecialchars($SITE['fax']) ?></span>
        </div>
        <div class="side-card__row">
            <svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
            <span><b>E-Mail</b><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></span>
        </div>
        <a href="kontakt.php" class="btn btn--solid">Jetzt online Termin buchen</a>
    </div>

    <div class="side-card">
        <h3>Sprechstunden</h3>
        <?php foreach ($SITE['hours'] as $h): ?>
            <div class="side-card__row"><span><b><?= htmlspecialchars($h[0]) ?></b><?= htmlspecialchars($h[1]) ?></span></div>
        <?php endforeach; ?>
    </div>
</aside>
