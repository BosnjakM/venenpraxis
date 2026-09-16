<?php
/**
 * Zentrale Konfiguration & Inhalte für die Website
 * Praxis für Gefässmedizin Angiobellaria AG
 */

$SITE = [
    'base_url'=> 'https://xn--venenpraxis-zrich-f3b.ch', // Live-Domain (venenpraxis-zürich.ch)
    'name'    => 'Praxis für Gefässmedizin',
    'company' => 'Angiobellaria AG',
    'doctor'  => 'Dr. med. et phil. Janine Dörffler-Melly',
    'phone'   => '+41 (0)44 482 71 00',
    'phone_raw' => '+41444827100',
    'fax'     => '+41 (0)44 482 71 07',
    'email'   => 'janine.doerffler@angiobellaria.ch',
    'street'  => 'Bellariastrasse 40',
    'zip_city'=> '8038 Zürich',
    'facebook'=> 'https://www.facebook.com/people/Gef%C3%A4sszentrum-Angiobellaria-Praxis-Dr-D%C3%B6rffler/100054504878183/',
    'linkedin'=> 'https://ch.linkedin.com/in/janine-d%C3%B6rffler-melly-7904a77b',
    'hours'   => [
        ['Mo, Di, Mi & Freitag', '08:00 – 17:00 Uhr'],
        ['Donnerstag', '08:00 – 12:00 Uhr'],
    ],
];

// Navigation: [slug/file, Label, hat Untermenü?]
$NAV = [
    ['index.php', 'Home'],
    ['#', 'Behandlungen', [
        ['pavk.php', 'PAVK'],
        ['geschwollenes-bein.php', 'Geschwollenes Bein'],
        ['krampfadern-varizen.php', 'Krampfadern / Varizen'],
        ['hypnose.php', 'Auf Wunsch auch mit Hypnose'],
    ]],
    ['ueber-uns.php', 'Über uns'],
    ['medizinische-informationen.php', 'Medizinische Informationen und Artikel'],
    ['kontakt.php', 'Kontakt'],
];

// aktuelle Seite ermitteln
$CURRENT = basename($_SERVER['PHP_SELF']);

function is_active(string $file): bool {
    global $CURRENT;
    return $CURRENT === $file;
}
