<section id="planos" class="pricing-section" aria-labelledby="pricing-heading">
    <div class="container text-center">
        <span class="section-label">Planos</span>
        <h2 class="section-title" id="pricing-heading" style="margin-inline:auto">Internet fibra para o seu ritmo</h2>
        <p class="section-desc" style="margin-inline:auto">Consumo ilimitado, Wi-Fi 6 incluso e sem fidelidade obrigatória.</p>

        <div class="pricing-grid">
            <?php
            $plans = [
                [
                    'name'     => '600 Mega',
                    'speed'    => '600',
                    'price'    => 'R$&nbsp;89,90',
                    'period'   => '/mês',
                    'desc'     => 'Ideal para uso doméstico com múltiplos dispositivos.',
                    'features' => [
                        'Download até 600 Mbps',
                        'Upload até 300 Mbps',
                        'Consumo ilimitado',
                        'Roteador Wi-Fi 6 incluso',
                        'Zaaz Play + Zaaz Educa',
                        'Suporte técnico 24h',
                    ],
                    'featured' => false,
                    'cta'      => 'Contratar agora',
                ],
                [
                    'name'     => '800 Mega',
                    'speed'    => '800',
                    'price'    => 'R$&nbsp;109,90',
                    'period'   => '/mês',
                    'desc'     => 'Para quem não abre mão de velocidade no dia a dia.',
                    'features' => [
                        'Download até 800 Mbps',
                        'Upload até 400 Mbps',
                        'Consumo ilimitado',
                        'Roteador Wi-Fi 6 incluso',
                        'Zaaz Play + Zaaz Educa',
                        'Suporte técnico 24h',
                        'IP fixo opcional',
                    ],
                    'featured' => true,
                    'cta'      => 'Quero 800 Mega',
                ],
                [
                    'name'     => '1 Giga',
                    'speed'    => '1000',
                    'price'    => 'R$&nbsp;139,90',
                    'period'   => '/mês',
                    'desc'     => 'Máxima performance para home office e streaming 4K.',
                    'features' => [
                        'Download até 1 Gbps',
                        'Upload até 500 Mbps',
                        'Consumo ilimitado',
                        'Roteador Wi-Fi 6 AX incluso',
                        'Zaaz Play + Zaaz Educa',
                        'Suporte técnico 24h',
                        'IP fixo incluso',
                    ],
                    'featured' => false,
                    'cta'      => 'Quero 1 Giga',
                ],
            ];

            foreach ($plans as $plan):
                $class = $plan['featured'] ? 'plan featured' : 'plan';
            ?>
            <div class="<?= $class ?>" itemscope itemtype="https://schema.org/Offer">
                <?php if ($plan['featured']): ?>
                <span class="section-label" style="margin-bottom:.75rem">Mais popular</span>
                <?php endif; ?>

                <h3 itemprop="name" style="font-size:1.25rem;font-weight:700"><?= htmlspecialchars($plan['name']) ?></h3>
                <p style="color:var(--color-muted);margin-top:.25rem;font-size:.9rem"><?= htmlspecialchars($plan['desc']) ?></p>

                <p class="plan-price" itemprop="price">
                    <?= $plan['price'] ?>
                    <span itemprop="priceCurrency" content="BRL"><?= htmlspecialchars($plan['period']) ?></span>
                </p>

                <ul>
                    <?php foreach ($plan['features'] as $feat): ?>
                    <li><?= htmlspecialchars($feat) ?></li>
                    <?php endforeach; ?>
                </ul>

                <a href="<?= WHATSAPP ?>&text=<?= urlencode('Olá! Tenho interesse no plano ' . $plan['name'] . ' da ZAAZ.') ?>"
                   target="_blank" rel="noopener noreferrer"
                   class="btn <?= $plan['featured'] ? 'btn-primary' : 'btn-outline' ?>"
                   style="width:100%;justify-content:center"
                   data-plan="<?= htmlspecialchars($plan['name']) ?>"
                   data-widget>
                    <?= htmlspecialchars($plan['cta']) ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <p style="margin-top:2rem;font-size:.85rem;color:var(--color-muted)">
            * Instalação gratuita. Preços válidos para residências nas áreas de cobertura MG, PR e SP.
        </p>
    </div>
</section>
