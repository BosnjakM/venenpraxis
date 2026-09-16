# Praxis für Gefässmedizin Angiobellaria – Website

Neuaufbau der Website der Praxis für Gefässmedizin Angiobellaria AG (Zürich)
in PHP – gleiche Inhalte wie das Original, moderner umgesetzt und für
Suchmaschinen/KI (SEO, Schema.org, sitemap.xml, robots.txt, llms.txt) vorbereitet.

## Struktur
- `index.php`, `pavk.php`, `geschwollenes-bein.php`, `krampfadern-varizen.php`,
  `hypnose.php`, `ueber-uns.php`, `medizinische-informationen.php`, `kontakt.php`
- `includes/` – gemeinsame Bausteine (`config.php`, `header.php`, `footer.php`, `sidebar.php`)
- `assets/` – CSS, JS, Bilder
- `robots.txt`, `sitemap.xml`, `llms.txt`

## Lokal starten (XAMPP / PHP)
```
php -S localhost:8000
```
Dann http://localhost:8000 öffnen.

## Deployment auf Vercel
Das Projekt enthält eine `vercel.json` mit der Community-Runtime
[`vercel-php`](https://github.com/vercel-community/php).

Hinweis: Vercel läuft serverless – das Kontaktformular (`mail()`) versendet
dort keine E-Mails. Für den produktiven Betrieb sollte der Formularversand auf
einen Mail-Dienst (z. B. SMTP-Anbieter, Formspree o. Ä.) umgestellt werden.
