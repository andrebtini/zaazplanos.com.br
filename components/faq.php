<?php
$faqs = [
    [
        'q' => 'Posso trocar de plano a qualquer momento?',
        'a' => 'Sim. Você pode fazer upgrade ou downgrade do seu plano a qualquer momento, diretamente pelo painel. As mudanças são aplicadas imediatamente com cobrança proporcional.',
    ],
    [
        'q' => 'Existe período de fidelidade?',
        'a' => 'Não. Todos os planos são mensais e sem fidelidade. Você pode cancelar quando quiser sem multas ou taxas adicionais.',
    ],
    [
        'q' => 'Quais formas de pagamento são aceitas?',
        'a' => 'Aceitamos cartão de crédito, boleto bancário e Pix. Pagamentos anuais têm desconto de 20%.',
    ],
    [
        'q' => 'Os dados ficam seguros?',
        'a' => 'Sim. Utilizamos criptografia TLS/SSL, backups automáticos diários e infraestrutura em servidores certificados ISO 27001.',
    ],
    [
        'q' => 'Há suporte em português?',
        'a' => 'Sim. Nossa equipe de suporte é 100% brasileira e atende de segunda a sexta, das 9h às 18h.',
    ],
];

// Schema FAQ para SEO + GEO
$faqSchema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(fn($f) => [
        '@type'          => 'Question',
        'name'           => $f['q'],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']],
    ], $faqs),
];
?>

<script type="application/ld+json">
<?= json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<section id="faq" aria-labelledby="faq-heading">
    <div class="container">
        <span class="section-label">FAQ</span>
        <h2 class="section-title" id="faq-heading">Perguntas frequentes</h2>

        <div class="faq-list" role="list">
            <?php foreach ($faqs as $faq): ?>
            <details role="listitem">
                <summary><?= htmlspecialchars($faq['q']) ?></summary>
                <p><?= htmlspecialchars($faq['a']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
