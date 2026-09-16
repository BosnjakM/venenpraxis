</main>

<footer class="footer">
    <!-- Sprechstunden-Box links, Karte rechts daneben -->
    <div class="footer-map">
        <div class="container footer-map__grid">
            <div class="footer-card">
                <h3>Sprechstunden</h3>
                <ul class="footer-card__hours">
                    <?php foreach ($SITE['hours'] as $h): ?>
                        <li><span><?= htmlspecialchars($h[0]) ?></span><span><?= htmlspecialchars($h[1]) ?></span></li>
                    <?php endforeach; ?>
                </ul>
                <div class="footer-card__row">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C10.6 21 3 13.4 3 4c0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .7-.2 1l-2.3 2.2z"/></svg>
                    <div><b>Telefon</b><a href="tel:<?= $SITE['phone_raw'] ?>"><?= $SITE['phone'] ?></a></div>
                </div>
                <div class="footer-card__row">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <div><b>E-Mail</b><a href="mailto:<?= $SITE['email'] ?>"><?= $SITE['email'] ?></a></div>
                </div>
                <div class="footer-card__row">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M12 2a7 7 0 0 0-7 7c0 5.2 7 13 7 13s7-7.8 7-13a7 7 0 0 0-7-7zm0 9.5A2.5 2.5 0 1 1 12 6.5a2.5 2.5 0 0 1 0 5z"/></svg>
                    <div><b>Praxis für Gefässmedizin Angiobellaria AG</b><span><?= htmlspecialchars($SITE['street']) ?>, <?= htmlspecialchars($SITE['zip_city']) ?></span></div>
                </div>
                <div class="footer-card__row">
                    <svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M3 12h3l2 5 4-11 2 6h4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    <div><b><a href="kontakt.php">Termin buchen</a></b><span>Jetzt online Termin buchen</span></div>
                </div>
            </div>
            <div class="footer-map__embed">
                <iframe title="Standort Bellariastrasse 40, 8038 Zürich" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps?q=Bellariastrasse+40,+8038+Z%C3%BCrich&output=embed"></iframe>
            </div>
        </div>
    </div>

    <!-- Roter Balken -->
    <div class="footer-red">
        <div class="container footer-red__inner">
            <div class="footer-red__nav">
                <b>Navigation:</b>
                Behandlungen: <a href="pavk.php">PAVK</a>, <a href="geschwollenes-bein.php">Geschwollenes Bein</a>, <a href="krampfadern-varizen.php">Krampfadern/Varizen</a>, <a href="hypnose.php">Auf Wunsch mit Hypnose</a><br>
                <a href="ueber-uns.php">Über uns</a> | <a href="kontakt.php">Kontakt</a>
                <div class="footer-red__social">
                    <a href="<?= $SITE['facebook'] ?>" target="_blank" rel="noopener" aria-label="Facebook"><svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M13 22v-8h2.7l.4-3H13V9c0-.9.2-1.5 1.5-1.5H16V4.8c-.3 0-1.2-.1-2.2-.1-2.2 0-3.8 1.4-3.8 3.9V11H7.5v3H10v8h3z"/></svg></a>
                    <a href="<?= $SITE['linkedin'] ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><svg viewBox="0 0 24 24" width="18" height="18"><path fill="currentColor" d="M4.98 3.5a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM3 9h4v12H3zM9 9h3.8v1.7h.1c.5-1 1.8-2 3.7-2 4 0 4.7 2.6 4.7 6V21h-4v-5.3c0-1.3 0-2.9-1.8-2.9s-2 1.4-2 2.8V21H9z"/></svg></a>
                </div>
            </div>
            <a class="footer-red__phone" href="tel:<?= $SITE['phone_raw'] ?>"><?= $SITE['phone'] ?></a>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-copy">
        <div class="container footer-copy__inner">
            <span>© <?= date('Y') ?> <?= htmlspecialchars($SITE['name']) ?> · <?= htmlspecialchars($SITE['company']) ?></span>
            <span><a href="#">Impressum</a> · <a href="#">Datenschutz</a></span>
        </div>
    </div>
</footer>

<button class="to-top" id="toTop" aria-label="Nach oben"><svg viewBox="0 0 24 24" width="22" height="22"><path fill="currentColor" d="M12 8l-6 6 1.4 1.4L12 10.8l4.6 4.6L18 14z"/></svg></button>

<script src="assets/js/main.js"></script>
</body>
</html>
