<?php
require_once 'includes/config.php';
require_once 'includes/seo.php';

$seo = new SEO([
    'title'       => 'Planos de Internet Fibra ZAAZ — 600 Mega, 800 Mega e 1 Giga',
    'description' => 'Compare os planos de internet fibra ZAAZ: 600 Mega, 800 Mega e 1 Giga. Consumo ilimitado, Wi-Fi 6 e instalação gratuita. MG, PR e SP.',
    'url'         => SITE_URL . '/planos',
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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style><?php readfile('assets/css/planos-critical.css'); ?></style>

    <link rel="preload" href="/assets/css/planos-main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/planos-main.css"></noscript>

    <?= $seo->renderSchema() ?>

    <script src="https://marketingsuite.com.br/api/leads_widget.php?p=prj3c5adaae2bfb36c8" defer></script>
</head>
<body>

    <?php include 'components/planos/header.php'; ?>
    <?php include 'components/planos/meta-bar.php'; ?>

    <main id="main-content">
        <?php include 'components/planos/pricing.php'; ?>
        <?php include 'components/planos/benefits.php'; ?>
        <?php include 'components/planos/coverage.php'; ?>
        <?php include 'components/planos/faq.php'; ?>
        <?php include 'components/planos/cta.php'; ?>
    </main>

    <?php include 'components/planos/footer.php'; ?>

    <script src="/assets/js/planos.js" defer></script>

</body>
</html>
