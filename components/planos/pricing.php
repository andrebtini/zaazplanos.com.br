<section id="planos" class="p-pricing" aria-label="Planos">
    <div class="container">
        <p class="p-section-kicker">
            <span>Planos residenciais &mdash; MG, PR e SP</span>
            <span>01 &nbsp;/&nbsp; 05</span>
        </p>

        <div class="plan-carousel" data-carousel>
            <div class="plan-carousel__vp" data-carousel-viewport>
                <div class="p-plans-grid" data-carousel-track>
            <?php
            $plans = [
                [
                    'num'      => '01',
                    'name'     => '300 Mega',
                    'desc'     => 'Ideal para uso doméstico com múltiplos dispositivos.',
                    'badge'    => null,
                    'price'    => '89,90',
                    'period'   => 'por mês',
                    'specs'    => [
                        ['Download',    '300 Mbps'],
                        ['Upload',      '150 Mbps'],
                        ['Consumo',     'Ilimitado'],
                        ['Conexão',     'PPPOE / IP Dinâmico'],
                        ['Wi-Fi 6',     'Incluso'],
                        ['Zaaz Play',   'Incluso'],
                        ['Zaaz Educa',  'Incluso'],
                    ],
                    'featured' => false,
                    'cta'      => 'Contratar',
                ],
                [
                    'num'      => '02',
                    'name'     => '600 Mega',
                    'desc'     => 'Navegue rápido com múltiplos dispositivos conectados.',
                    'badge'    => null,
                    'price'    => '99,90',
                    'period'   => 'por mês',
                    'specs'    => [
                        ['Download',    '600 Mbps'],
                        ['Upload',      '300 Mbps'],
                        ['Consumo',     'Ilimitado'],
                        ['Conexão',     'PPPOE / IP Dinâmico'],
                        ['Wi-Fi 6',     'Incluso'],
                        ['Zaaz Play',   'Incluso'],
                        ['Zaaz Educa',  'Incluso'],
                    ],
                    'featured' => false,
                    'cta'      => 'Quero 600 Mega',
                ],
                [
                    'num'      => '03',
                    'name'     => '800 Mega',
                    'desc'     => 'Para quem não abre mão de velocidade no dia a dia.',
                    'badge'    => 'Oferta Exclusiva',
                    'price'    => '119,90',
                    'period'   => 'por mês',
                    'specs'    => [
                        ['Download',    '800 Mbps'],
                        ['Upload',      '400 Mbps'],
                        ['Consumo',     'Ilimitado'],
                        ['Conexão',     'PPPOE / IP Dinâmico'],
                        ['Wi-Fi 6',     'Incluso'],
                        ['Zaaz Play',   'Incluso'],
                        ['Zaaz Educa',  'Incluso'],
                        ['Mumo',        'Incluso'],
                    ],
                    'featured' => true,
                    'cta'      => 'Quero 800 Mega',
                ],
                [
                    'num'      => '04',
                    'name'     => '1 Giga',
                    'desc'     => 'Máxima performance para home office e streaming 4K.',
                    'badge'    => null,
                    'price'    => '154,90',
                    'period'   => 'por mês',
                    'specs'    => [
                        ['Download',    '1 Gbps'],
                        ['Upload',      '500 Mbps'],
                        ['Consumo',     'Ilimitado'],
                        ['Conexão',     'PPPOE / IP Dinâmico'],
                        ['Wi-Fi 6',     'Incluso'],
                        ['Zaaz Play',   'Incluso'],
                        ['Zaaz Educa',  'Incluso'],
                        ['Mumo',        'Incluso'],
                    ],
                    'featured' => false,
                    'cta'      => 'Quero 1 Giga',
                ],
            ];
            foreach ($plans as $plan):
            ?>
            <article class="p-plan p-reveal<?= $plan['featured'] ? ' p-plan--featured' : '' ?>"
                     data-carousel-slide itemscope itemtype="https://schema.org/Offer">

                <div class="p-plan-kicker">
                    <span>Plano <?= $plan['num'] ?></span>
                    <?php if ($plan['badge']): ?>
                    <span class="p-badge"><?= htmlspecialchars($plan['badge']) ?></span>
                    <?php endif; ?>
                </div>

                <h2 itemprop="name" class="p-plan-name"><?= htmlspecialchars($plan['name']) ?></h2>
                <p class="p-plan-desc"><?= htmlspecialchars($plan['desc']) ?></p>

                <div class="p-plan-price-row">
                    <span class="p-plan-currency">R$</span>
                    <span class="p-plan-price" itemprop="price"><?= htmlspecialchars($plan['price']) ?></span>
                    <span class="p-plan-period"><?= htmlspecialchars($plan['period']) ?></span>
                    <meta itemprop="priceCurrency" content="BRL">
                </div>

                <ul class="p-plan-specs">
                    <?php foreach ($plan['specs'] as [$key, $val]): ?>
                    <li>
                        <span class="p-plan-spec-key"><?= htmlspecialchars($key) ?></span>
                        <span class="p-plan-spec-val"><?= htmlspecialchars($val) ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#" class="p-btn p-btn-primary p-plan-cta"
                   data-plan="<?= htmlspecialchars($plan['name']) ?>" data-wl-open>
                    <?= htmlspecialchars($plan['cta']) ?>
                    <svg aria-hidden="true" width="15" height="15" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </article>
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

        <p class="p-pricing-note">
            * Instalação gratuita. Preços válidos para residências nas áreas de cobertura MG, PR e SP. Valores mensais, sem taxa de adesão.
        </p>
    </div>
</section>
