<?php
require_once __DIR__ . '/config.php';
$PAGE_TITLE = $PAGE_TITLE ?? 'Praxis für Gefässmedizin – Angiologie Zürich';
$PAGE_DESC  = $PAGE_DESC  ?? 'Praxis für Gefässmedizin Angiobellaria in Zürich. Ihre Spezialistin für Krampfadern und Durchblutungsstörungen.';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($PAGE_TITLE) ?></title>
    <meta name="description" content="<?= htmlspecialchars($PAGE_DESC) ?>">
    <meta name="robots" content="index, follow">
    <?php $CANONICAL = rtrim($SITE['base_url'], '/') . '/' . ($CURRENT === 'index.php' ? '' : $CURRENT); ?>
    <link rel="canonical" href="<?= htmlspecialchars($CANONICAL) ?>">
    <link rel="icon" href="assets/img/logo1.gif" type="image/gif">

    <!-- Open Graph / Social -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Praxis für Gefässmedizin Angiobellaria">
    <meta property="og:locale" content="de_CH">
    <meta property="og:title" content="<?= htmlspecialchars($PAGE_TITLE) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($PAGE_DESC) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($CANONICAL) ?>">
    <meta property="og:image" content="<?= htmlspecialchars(rtrim($SITE['base_url'], '/')) ?>/assets/img/Pr3IMG_0979-scaled.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="geo.region" content="CH-ZH">
    <meta name="geo.placename" content="Zürich">

    <!-- Strukturierte Daten (Schema.org) für Suchmaschinen & KI -->
    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'MedicalClinic',
        'name'     => 'Praxis für Gefässmedizin Angiobellaria AG',
        'url'      => rtrim($SITE['base_url'], '/') . '/',
        'image'    => rtrim($SITE['base_url'], '/') . '/assets/img/Pr3IMG_0979-scaled.jpg',
        'telephone'=> $SITE['phone_raw'],
        'faxNumber'=> $SITE['fax'],
        'email'    => $SITE['email'],
        'medicalSpecialty' => 'Angiology',
        'priceRange' => '$$',
        'address'  => [
            '@type' => 'PostalAddress',
            'streetAddress'   => $SITE['street'],
            'postalCode'      => '8038',
            'addressLocality' => 'Zürich',
            'addressCountry'  => 'CH',
        ],
        'openingHoursSpecification' => [
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday','Tuesday','Wednesday','Friday'], 'opens' => '08:00', 'closes' => '17:00'],
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Thursday'], 'opens' => '08:00', 'closes' => '12:00'],
        ],
        'availableService' => [
            ['@type' => 'MedicalProcedure', 'name' => 'Krampfadern / Varizen'],
            ['@type' => 'MedicalProcedure', 'name' => 'PAVK – periphere arterielle Verschlusskrankheit'],
            ['@type' => 'MedicalProcedure', 'name' => 'Geschwollenes Bein, Thrombose & Lungenembolie'],
            ['@type' => 'MedicalProcedure', 'name' => 'Venenverödung & Venenentfernung'],
        ],
        'employee' => [
            '@type' => 'Physician',
            'name'  => 'Dr. med. et phil. Janine Dörffler-Melly',
            'medicalSpecialty' => 'Angiology',
            'jobTitle' => 'FMH für Angiologie und Innere Medizin',
        ],
        'sameAs' => [$SITE['facebook'], $SITE['linkedin']],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="header" id="header">
    <div class="container header__inner">
        <a href="index.php" class="header__logo">
            <img src="assets/img/logo1.gif" alt="Praxis für Gefässmedizin">
        </a>
        <button class="nav-toggle" id="navToggle" aria-label="Menü" aria-expanded="false"><span></span><span></span><span></span></button>
        <nav class="nav" id="nav">
            <ul class="nav__list">
                <?php foreach ($NAV as $item): $hasSub = isset($item[2]); ?>
                    <li class="nav__item<?= $hasSub ? ' nav__item--has-sub' : '' ?>">
                        <a href="<?= $item[0] ?>" class="nav__link<?= is_active($item[0]) ? ' is-active' : '' ?>">
                            <?= htmlspecialchars($item[1]) ?>
                            <?php if ($hasSub): ?><svg class="nav__caret" viewBox="0 0 24 24" width="13" height="13"><path fill="currentColor" d="M7 10l5 5 5-5z"/></svg><?php endif; ?>
                        </a>
                        <?php if ($hasSub): ?>
                            <ul class="nav__sub">
                                <?php foreach ($item[2] as $sub): ?>
                                    <li><a href="<?= $sub[0] ?>" class="<?= is_active($sub[0]) ? 'is-active' : '' ?>"><?= htmlspecialchars($sub[1]) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>
<main>
