<section id="planos" class="v3-pricing" aria-labelledby="v3-pricing-heading">

    <!-- Trust bar ticker -->
    <?php
    $items = [
        'Fibra óptica 100%',
        'Consumo ilimitado',
        'Wi-Fi 6 incluso',
        'Instalação gratuita',
        'Sem fidelidade',
        'Suporte 24h',
        'Zaaz Play incluso',
        'Zaaz Educa incluso',
    ];
    ?>
    <div class="v3-trust-bar" aria-hidden="true">
        <div class="v3-trust-inner">
            <?php for ($i = 0; $i < 2; $i++): foreach ($items as $item): ?>
            <span class="v3-trust-item">
                <span class="v3-trust-dot"></span>
                <?= htmlspecialchars($item) ?>
            </span>
            <?php endforeach; endfor; ?>
        </div>
    </div>

    <div class="container">
        <div class="plan-carousel" data-carousel>
            <div class="plan-carousel__vp" data-carousel-viewport>
                <div class="v3-plans-grid" data-carousel-track>
            <?php
            $plans = [
                [
                    'name'     => '300 Mega',
                    'badge'    => null,
                    'price'    => '89,90',
                    'period'   => '/mês',
                    'desc'     => 'Ideal para uso doméstico com múltiplos dispositivos.',
                    'speed_w'  => '30%',
                    'speed_dl' => '300 Mbps',
                    'features' => [
                        'Download até 300 Mbps',
                        'Upload até 150 Mbps',
                        'Consumo ilimitado',
                        'Conexão PPPOE com IP Dinâmico',
                        'Wi-Fi 6 incluso',
                        'Zaaz Play + Zaaz Educa',
                    ],
                    'featured' => false,
                    'cta'      => 'Contratar agora',
                ],
                [
                    'name'     => '600 Mega',
                    'badge'    => null,
                    'price'    => '99,90',
                    'period'   => '/mês',
                    'desc'     => 'Navegue rápido com múltiplos dispositivos conectados.',
                    'speed_w'  => '60%',
                    'speed_dl' => '600 Mbps',
                    'features' => [
                        'Download até 600 Mbps',
                        'Upload até 300 Mbps',
                        'Consumo ilimitado',
                        'Conexão PPPOE com IP Dinâmico',
                        'Wi-Fi 6 incluso',
                        'Zaaz Play + Zaaz Educa',
                    ],
                    'featured' => false,
                    'cta'      => 'Quero 600 Mega',
                ],
                [
                    'name'     => '800 Mega',
                    'badge'    => 'Oferta Exclusiva',
                    'price'    => '119,90',
                    'period'   => '/mês',
                    'desc'     => 'Para quem não abre mão de velocidade no dia a dia.',
                    'speed_w'  => '80%',
                    'speed_dl' => '800 Mbps',
                    'features' => [
                        'Download até 800 Mbps',
                        'Upload até 400 Mbps',
                        'Consumo ilimitado',
                        'Conexão PPPOE com IP Dinâmico',
                        'Wi-Fi 6 incluso',
                        'Zaaz Play + Zaaz Educa',
                        'Mumo incluso',
                    ],
                    'featured' => true,
                    'cta'      => 'Quero 800 Mega',
                ],
                [
                    'name'     => '1 Giga',
                    'badge'    => null,
                    'price'    => '154,90',
                    'period'   => '/mês',
                    'desc'     => 'Máxima performance para home office e streaming 4K.',
                    'speed_w'  => '100%',
                    'speed_dl' => '1 Gbps',
                    'features' => [
                        'Download até 1 Gbps',
                        'Upload até 500 Mbps',
                        'Consumo ilimitado',
                        'Conexão PPPOE com IP Dinâmico',
                        'Wi-Fi 6 incluso',
                        'Zaaz Play + Zaaz Educa',
                        'Mumo incluso',
                    ],
                    'featured' => false,
                    'cta'      => 'Quero 1 Giga',
                ],
            ];

            foreach ($plans as $plan):
            $featured_class = $plan['featured'] ? ' v3-plan--featured' : '';
            ?>
            <div class="v3-plan v3-reveal<?= $featured_class ?>"
                 data-carousel-slide
                 style="--speed-w:<?= $plan['speed_w'] ?>"
                 itemscope itemtype="https://schema.org/Offer">

                <?php if ($plan['badge']): ?>
                <div class="v3-plan-badge"><?= htmlspecialchars($plan['badge']) ?></div>
                <?php endif; ?>

                <div class="v3-plan-header">
                    <h2 itemprop="name" class="v3-plan-name"><?= htmlspecialchars($plan['name']) ?></h2>
                    <p class="v3-plan-desc"><?= htmlspecialchars($plan['desc']) ?></p>
                </div>

                <div class="v3-plan-speed-wrap">
                    <div class="v3-plan-speed-bar">
                        <div class="v3-plan-speed-fill"></div>
                    </div>
                    <div class="v3-plan-speed-label">
                        <span>Download</span>
                        <span class="v3-speed-mbps"><?= htmlspecialchars($plan['speed_dl']) ?></span>
                    </div>
                </div>

                <div class="v3-plan-price-wrap">
                    <span class="v3-plan-currency">R$</span>
                    <span class="v3-plan-price-num" itemprop="price"><?= htmlspecialchars($plan['price']) ?></span>
                    <span class="v3-plan-period" itemprop="priceCurrency" content="BRL"><?= htmlspecialchars($plan['period']) ?></span>
                </div>

                <ul class="v3-plan-features">
                    <?php foreach ($plan['features'] as $feat): ?>
                    <li>
                        <svg aria-hidden="true" width="15" height="15" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2.5"
                             stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        <?= htmlspecialchars($feat) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#"
                   class="btn <?= $plan['featured'] ? 'btn-primary' : 'btn-outline' ?>"
                   data-plan="<?= htmlspecialchars($plan['name']) ?>"
                   data-wl-open>
                    <?= htmlspecialchars($plan['cta']) ?>
                    <svg aria-hidden="true" width="15" height="15" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>

            </div>
            <?php endforeach; ?>
                </div><!-- /track -->
            </div><!-- /viewport -->
            <div class="plan-carousel__footer">
                <button class="plan-carousel__btn" data-carousel-prev disabled aria-label="Plano anterior">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                </button>
                <div class="plan-carousel__dots" role="tablist" aria-label="Navegar pelos planos">
                    <?php for ($d = 0; $d < count($plans); $d++): ?>
                    <button class="plan-carousel__dot<?= $d === 0 ? ' active' : '' ?>"
                            data-carousel-dot role="tab" aria-label="Plano <?= $d + 1 ?>"></button>
                    <?php endfor; ?>
                </div>
                <button class="plan-carousel__btn" data-carousel-next aria-label="Próximo plano">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div><!-- /plan-carousel -->

        <p class="v3-pricing-note">
            * Instalação gratuita. Preços válidos para residências nas áreas de cobertura MG, PR e SP.
        </p>
    </div>

</section>
