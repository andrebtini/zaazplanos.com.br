<?php
require_once 'includes/config.php';
require_once 'includes/seo.php';

$seo = new SEO([
    'title'       => 'Planos de Internet Fibra ZAAZ — 600 Mega, 800 Mega e 1 Giga',
    'description' => 'Contrate internet fibra ZAAZ com velocidades de 600 MB a 1 Giga, consumo ilimitado, Wi-Fi 6, Zaaz Play e Zaaz Educa. Planos residenciais para MG, PR e SP.',
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

    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" href="/assets/img/favicon.png">
    <link rel="shortcut icon" href="/assets/img/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800;900&family=Karla:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <style><?php readfile('assets/css/v3-critical.css'); ?></style>

    <link rel="preload" href="/assets/css/v3-main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/v3-main.css"></noscript>

    <?= $seo->renderSchema() ?>

    <script src="https://marketingsuite.com.br/api/leads_widget.php?p=prj3c5adaae2bfb36c8" defer></script>
</head>
<body>

    <?php include 'components/v3/header.php'; ?>

    <main id="main-content">
        <?php include 'components/v3/hero.php'; ?>
        <?php include 'components/v3/pricing.php'; ?>
        <?php include 'components/v3/benefits.php'; ?>
        <?php include 'components/v3/howto.php'; ?>
        <?php include 'components/v3/faq.php'; ?>
        <?php include 'components/v3/coverage.php'; ?>
        <?php include 'components/v3/cta.php'; ?>
    </main>

    <?php include 'components/v3/footer.php'; ?>

    <script src="/assets/js/v3-main.js" defer></script>

</body>
</html>
