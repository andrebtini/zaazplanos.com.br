<?php
$faqs = [
    ['q' => 'O consumo é realmente ilimitado?',            'a' => 'Sim. Todos os planos ZAAZ oferecem consumo genuinamente ilimitado, sem franquia e sem redução de velocidade em nenhum momento do mês.'],
    ['q' => 'Existe prazo de fidelidade?',                 'a' => 'Não. Nossos planos são mensais e você pode cancelar quando quiser, sem multa e sem burocracia.'],
    ['q' => 'A instalação tem algum custo?',               'a' => 'Não. A instalação é 100% gratuita. Nosso técnico vai até o seu endereço, instala o cabeamento de fibra óptica e configura o roteador Wi-Fi 6 sem cobrar nada.'],
    ['q' => 'O roteador Wi-Fi 6 fica comigo?',             'a' => 'O roteador fica em comodato (empréstimo gratuito) durante o período da assinatura. Enquanto você for cliente, ele é seu para usar.'],
    ['q' => 'Qual é a velocidade de upload?',              'a' => 'Os planos oferecem upload de até 300 Mbps (600 Mega), 400 Mbps (800 Mega) e 500 Mbps (1 Giga). Ideal para home office, videochamadas e envio de arquivos grandes.'],
    ['q' => 'Como funciona o suporte técnico?',            'a' => 'Suporte 24 horas por dia, 7 dias por semana, via WhatsApp ou telefone. Nossa equipe é local e conhece a infraestrutura da região.'],
    ['q' => 'Zaaz Play e Zaaz Educa já estão inclusos?',   'a' => 'Sim. Todos os planos incluem Zaaz Play (streaming com filmes, séries e canais ao vivo) e Zaaz Educa (plataforma de cursos), sem custo adicional.'],
    ['q' => 'Em quais cidades a ZAAZ atende?',             'a' => 'Atendemos cidades em Minas Gerais, Paraná e São Paulo. Para confirmar disponibilidade no seu endereço específico, fale conosco pelo WhatsApp — a consulta é gratuita.'],
];
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

<section id="faq" class="p-faq" aria-labelledby="p-faq-heading">
    <div class="container">
        <div class="p-section-head p-reveal">
            <p class="p-section-kicker">
                <span>Perguntas frequentes</span>
                <span>04 &nbsp;/&nbsp; 05</span>
            </p>
            <h2 class="p-section-title" id="p-faq-heading">Dúvidas comuns,<br>respostas diretas.</h2>
        </div>

        <div class="p-faq-list" role="list">
            <?php foreach ($faqs as $faq): ?>
            <details class="p-faq-item" role="listitem">
                <summary class="p-faq-summary">
                    <span><?= htmlspecialchars($faq['q']) ?></span>
                    <span class="p-faq-icon" aria-hidden="true"></span>
                </summary>
                <p class="p-faq-body"><?= htmlspecialchars($faq['a']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
