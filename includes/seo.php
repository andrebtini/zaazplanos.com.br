<?php

class SEO {

    private array $data;

    public function __construct(array $data) {
        $this->data = array_merge([
            'title'       => SITE_NAME,
            'description' => '',
            'url'         => SITE_URL,
            'image'       => SITE_URL . '/assets/img/og-image.jpg',
            'type'        => 'website',
            'locale'      => 'pt_BR',
        ], $data);
    }

    public function renderMeta(): string {
        $d = $this->data;
        $title = htmlspecialchars($d['title'], ENT_QUOTES);
        $desc  = htmlspecialchars($d['description'], ENT_QUOTES);
        $url   = htmlspecialchars($d['url'], ENT_QUOTES);
        $image = htmlspecialchars($d['image'], ENT_QUOTES);

        return <<<HTML
    <title>{$title}</title>
    <meta name="description" content="{$desc}">
    <link rel="canonical" href="{$url}">

    <!-- Open Graph -->
    <meta property="og:type"        content="{$d['type']}">
    <meta property="og:title"       content="{$title}">
    <meta property="og:description" content="{$desc}">
    <meta property="og:url"         content="{$url}">
    <meta property="og:image"       content="{$image}">
    <meta property="og:locale"      content="{$d['locale']}">
    <meta property="og:site_name"   content="ZaazPlanos">

    <!-- Twitter Card -->
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="{$title}">
    <meta name="twitter:description" content="{$desc}">
    <meta name="twitter:image"       content="{$image}">

    <!-- GEO: sinais para LLMs e AI crawlers -->
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
HTML;
    }

    public function renderSchema(): string {
        $schema = [
            '@context' => 'https://schema.org',
            '@graph'   => [
                [
                    '@type'       => 'Organization',
                    '@id'         => SITE_URL . '/#organization',
                    'name'        => 'ZaazPlanos',
                    'url'         => SITE_URL,
                    'logo'        => [
                        '@type' => 'ImageObject',
                        'url'   => SITE_URL . '/assets/img/logo.svg',
                    ],
                    'sameAs'      => [
                        // Adicione redes sociais aqui
                    ],
                ],
                [
                    '@type'           => 'WebSite',
                    '@id'             => SITE_URL . '/#website',
                    'url'             => SITE_URL,
                    'name'            => 'ZaazPlanos',
                    'publisher'       => ['@id' => SITE_URL . '/#organization'],
                    'inLanguage'      => 'pt-BR',
                    'potentialAction' => [
                        '@type'       => 'SearchAction',
                        'target'      => [
                            '@type'       => 'EntryPoint',
                            'urlTemplate' => SITE_URL . '/?s={search_term_string}',
                        ],
                        'query-input' => 'required name=search_term_string',
                    ],
                ],
                [
                    '@type'       => 'WebPage',
                    '@id'         => $this->data['url'] . '#webpage',
                    'url'         => $this->data['url'],
                    'name'        => $this->data['title'],
                    'description' => $this->data['description'],
                    'isPartOf'    => ['@id' => SITE_URL . '/#website'],
                    'inLanguage'  => 'pt-BR',
                ],
            ],
        ];

        $json = json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        return "<script type=\"application/ld+json\">\n{$json}\n</script>";
    }
}
