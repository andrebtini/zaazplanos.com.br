<?php
$faqs = [
    [
        'q' => 'A ZAAZ tem cobertura no meu endereço?',
        'a' => 'Atendemos cidades em Minas Gerais, Paraná e São Paulo. Para confirmar disponibilidade no seu endereço específico, entre em contato pelo WhatsApp — a consulta é gratuita e leva menos de 1 minuto.',
    ],
    [
        'q' => 'O consumo realmente é ilimitado?',
        'a' => 'Sim. Todos os planos ZAAZ oferecem consumo genuinamente ilimitado, sem franquia e sem redução de velocidade (throttling) em nenhum momento do mês.',
    ],
    [
        'q' => 'Qual é o prazo de fidelidade?',
        'a' => 'Não existe fidelidade mínima obrigatória. Nossos planos são mensais e você pode cancelar quando quiser, sem multa e sem burocracia.',
    ],
    [
        'q' => 'A instalação tem algum custo?',
        'a' => 'Não. A instalação é 100% gratuita. Nosso técnico vai até o seu endereço, instala o cabeamento de fibra óptica e configura o roteador Wi-Fi 6 sem cobrar nada.',
    ],
    [
        'q' => 'O roteador Wi-Fi 6 é meu ou alugado?',
        'a' => 'O roteador fica em comodato (empréstimo gratuito) durante o período da assinatura. Enquanto você for cliente, ele é seu para usar. Em caso de cancelamento, devolvemos em conjunto.',
    ],
    [
        'q' => 'Qual é a velocidade de upload dos planos?',
        'a' => 'Os planos oferecem upload de até 300 Mbps (600 Mega), 400 Mbps (800 Mega) e 500 Mbps (1 Giga). Ideal para home office, videochamadas e envio de arquivos grandes.',
    ],
    [
        'q' => 'Como funciona o suporte técnico?',
        'a' => 'O suporte é 24 horas por dia, 7 dias por semana, via WhatsApp ou telefone. Nossa equipe é local — moramos nas mesmas cidades que você — e conhece a infraestrutura da região.',
    ],
    [
        'q' => 'O Zaaz Play e o Zaaz Educa já estão inclusos?',
        'a' => 'Sim. Todos os planos já incluem acesso ao Zaaz Play (streaming com filmes, séries e canais ao vivo) e ao Zaaz Educa (plataforma de cursos e videoaulas), sem custo adicional.',
    ],
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

<section id="faq" aria-labelledby="faq-heading" style="background:var(--color-surface)">
    <div class="container">
        <span class="section-label">FAQ</span>
        <h2 class="section-title" id="faq-heading">Perguntas frequentes</h2>
        <p class="section-desc">Tudo o que você precisa saber antes de contratar.</p>

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
