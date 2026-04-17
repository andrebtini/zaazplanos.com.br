<section id="diferenciais" aria-labelledby="why-heading">
    <div class="container">
        <span class="section-label">Por que ZAAZ</span>
        <h2 class="section-title" id="why-heading">Internet de quem mora aqui para quem mora aqui</h2>
        <p class="section-desc">Somos um provedor regional com compromisso local — não uma grande empresa que trata você como número.</p>

        <div class="why-grid">
            <?php
            $whys = [
                [
                    'stat'  => '99,8%',
                    'label' => 'de uptime garantido',
                    'desc'  => 'Rede monitorada 24h com redundância para manter sua conexão sempre ativa.',
                ],
                [
                    'stat'  => '0',
                    'label' => 'franquia de dados',
                    'desc'  => 'Consumo verdadeiramente ilimitado, sem redução de velocidade ao atingir qualquer limite.',
                ],
                [
                    'stat'  => 'Wi-Fi 6',
                    'label' => 'roteador incluso',
                    'desc'  => 'O padrão mais moderno do mercado entregue e configurado pelos nossos técnicos.',
                ],
                [
                    'stat'  => '24h',
                    'label' => 'suporte técnico',
                    'desc'  => 'Atendimento humano a qualquer hora — equipe local que conhece a sua região.',
                ],
                [
                    'stat'  => 'Grátis',
                    'label' => 'instalação',
                    'desc'  => 'Sem taxa de adesão. Nosso técnico vai até sua casa sem custo adicional.',
                ],
                [
                    'stat'  => 'Sem',
                    'label' => 'fidelidade',
                    'desc'  => 'Planos mensais sem contrato mínimo. Cancele quando quiser, sem multa.',
                ],
            ];
            ?>

            <?php foreach ($whys as $w): ?>
            <div class="why-card">
                <p class="why-stat"><?= htmlspecialchars($w['stat']) ?></p>
                <p class="why-label"><?= htmlspecialchars($w['label']) ?></p>
                <p class="why-desc"><?= htmlspecialchars($w['desc']) ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
