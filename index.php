<?php
require_once 'includes/config.php';
require_once 'includes/seo.php';

$seo = new SEO([
    'title'       => 'ZaazPlanos — Planos e Soluções para o seu Negócio',
    'description' => 'Encontre o plano ideal para o seu negócio com a ZaazPlanos. Soluções completas, preços transparentes e suporte dedicado.',
    'url'         => SITE_URL . '/',
    'image'       => SITE_URL . '/assets/img/og-image.jpg',
    'type'        => 'website',
]);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= $seo->renderMeta() ?>

    <!-- Preconnect para recursos externos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

    <!-- CSS crítico inline (above the fold) -->
    <style>
        <?php readfile('assets/css/critical.css'); ?>
    </style>

    <!-- CSS não-crítico carregado de forma assíncrona -->
    <link rel="preload" href="/assets/css/main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/main.css"></noscript>

    <!-- Schema.org JSON-LD (SEO + GEO) -->
    <?= $seo->renderSchema() ?>
</head>
<body>

    <?php include 'components/header.php'; ?>

    <main id="main-content">

        <?php include 'components/hero.php'; ?>
        <?php include 'components/features.php'; ?>
        <?php include 'components/pricing.php'; ?>
        <?php include 'components/faq.php'; ?>
        <?php include 'components/cta.php'; ?>

    </main>

    <?php include 'components/footer.php'; ?>

    <!-- JS diferido -->
    <script src="/assets/js/main.js" defer></script>

</body>
</html>
