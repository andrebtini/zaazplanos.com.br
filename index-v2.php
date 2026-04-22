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
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet">

    <style><?php readfile('assets/css/v2-critical.css'); ?></style>

    <link rel="preload" href="/assets/css/v2-main.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/assets/css/v2-main.css"></noscript>

    <?= $seo->renderSchema() ?>

    <script src="https://marketingsuite.com.br/api/leads_widget.php?p=prj3c5adaae2bfb36c8" defer></script>
</head>
<body>

    <?php include 'components/v2/header.php'; ?>

    <main id="main-content">
        <?php include 'components/pricing.php'; ?>
        <?php include 'components/benefits.php'; ?>
        <?php include 'components/routine.php'; ?>
        <?php include 'components/why.php'; ?>
        <?php include 'components/howto.php'; ?>
        <?php include 'components/faq.php'; ?>
        <?php include 'components/coverage.php'; ?>
        <?php include 'components/cta.php'; ?>
    </main>

    <?php include 'components/footer.php'; ?>

    <script src="/assets/js/v2-main.js" defer></script>

</body>
</html>
