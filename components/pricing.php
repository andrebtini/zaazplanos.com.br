<section id="planos" class="pricing-section" aria-label="Planos de internet fibra ZAAZ">

    <div class="trust-bar" aria-hidden="true">
        <div class="container">
            <span>⚡ Fibra óptica 100%</span>
            <span>∞ Consumo ilimitado</span>
            <span>📶 Wi-Fi 6 incluso</span>
            <span>🔧 Instalação gratuita</span>
            <span>📅 Sem fidelidade</span>
        </div>
    </div>

    <div class="container">
        <div class="pricing-grid">
            <?php
            $plans = [
                [
                    'name'     => '600 Mega',
                    'badge'    => null,
                    'price'    => '89,90',
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
                    'badge'    => 'Mais popular',
                    'price'    => '109,90',
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
                    'badge'    => null,
                    'price'    => '139,90',
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
            ?>
            <div class="plan<?= $plan['featured'] ? ' featured' : '' ?>" itemscope itemtype="https://schema.org/Offer">

                <?php if ($plan['badge']): ?>
                <div class="plan-badge"><?= htmlspecialchars($plan['badge']) ?></div>
                <?php endif; ?>

                <div class="plan-header">
                    <h2 itemprop="name" class="plan-name"><?= htmlspecialchars($plan['name']) ?></h2>
                    <p class="plan-desc"><?= htmlspecialchars($plan['desc']) ?></p>
                </div>

                <div class="plan-price-wrap">
                    <span class="plan-currency">R$</span>
                    <span class="plan-price" itemprop="price"><?= htmlspecialchars($plan['price']) ?></span>
                    <span class="plan-period" itemprop="priceCurrency" content="BRL"><?= htmlspecialchars($plan['period']) ?></span>
                </div>

                <ul class="plan-features">
                    <?php foreach ($plan['features'] as $feat): ?>
                    <li>
                        <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <?= htmlspecialchars($feat) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#"
                   class="btn plan-btn<?= $plan['featured'] ? ' btn-white' : ' btn-outline' ?>"
                   data-plan="<?= htmlspecialchars($plan['name']) ?>"
                   data-wl-open>
                    <?= htmlspecialchars($plan['cta']) ?>
                    <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <p class="pricing-note">* Instalação gratuita. Preços válidos para residências nas áreas de cobertura MG, PR e SP.</p>
    </div>
</section>
