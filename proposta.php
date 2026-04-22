<?php
require_once 'includes/config.php';
require_once 'includes/seo.php';

$seo = new SEO([
    'title'       => 'Proposta Internet Fibra ZAAZ — Planos 600 Mega, 800 Mega e 1 Giga',
    'description' => 'Veja os planos de internet fibra ZAAZ: 600 Mega, 800 Mega ou 1 Giga. Consumo ilimitado, Wi-Fi 6 e instalação gratuita. MG, PR e SP.',
    'url'         => SITE_URL . '/proposta',
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
    <style><?php readfile('assets/css/v3-light.css'); ?></style>

    <link rel="preload" href="/assets/css/v3-main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/v3-main.css"></noscript>

    <?= $seo->renderSchema() ?>

    <script src="https://marketingsuite.com.br/api/leads_widget.php?p=prj3c5adaae2bfb36c8" defer></script>
</head>
<body class="v3-light">

    <?php include 'components/v3/header.php'; ?>

    <main id="main-content">
        <?php include 'components/v3/pricing-clean.php'; ?>
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
