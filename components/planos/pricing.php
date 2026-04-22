<section id="planos" class="p-pricing" aria-label="Planos">
    <div class="container">
        <p class="p-section-kicker">
            <span>Planos residenciais &mdash; MG, PR e SP</span>
            <span>01 &nbsp;/&nbsp; 05</span>
        </p>

        <div class="p-plans-grid">
            <?php
            $plans = [
                [
                    'num'      => '01',
                    'name'     => '600 Mega',
                    'desc'     => 'Uso doméstico com múltiplos dispositivos conectados.',
                    'badge'    => null,
                    'price'    => '89,90',
                    'period'   => 'por mês',
                    'specs'    => [
                        ['Download',    '600 Mbps'],
                        ['Upload',      '300 Mbps'],
                        ['Consumo',     'Ilimitado'],
                        ['Roteador',    'Wi-Fi 6'],
                        ['Zaaz Play',   'Incluso'],
                        ['Zaaz Educa',  'Incluso'],
                        ['Suporte',     '24h, humano'],
                    ],
                    'featured' => false,
                    'cta'      => 'Contratar',
                ],
                [
                    'num'      => '02',
                    'name'     => '800 Mega',
                    'desc'     => 'Para quem não abre mão de velocidade no dia a dia.',
                    'badge'    => 'Mais popular',
                    'price'    => '109,90',
                    'period'   => 'por mês',
                    'specs'    => [
                        ['Download',    '800 Mbps'],
                        ['Upload',      '400 Mbps'],
                        ['Consumo',     'Ilimitado'],
                        ['Roteador',    'Wi-Fi 6'],
                        ['Zaaz Play',   'Incluso'],
                        ['Zaaz Educa',  'Incluso'],
                        ['IP fixo',     'Opcional'],
                    ],
                    'featured' => true,
                    'cta'      => 'Quero 800 Mega',
                ],
                [
                    'num'      => '03',
                    'name'     => '1 Giga',
                    'desc'     => 'Máxima performance para home office e streaming 4K.',
                    'badge'    => null,
                    'price'    => '139,90',
                    'period'   => 'por mês',
                    'specs'    => [
                        ['Download',    '1 Gbps'],
                        ['Upload',      '500 Mbps'],
                        ['Consumo',     'Ilimitado'],
                        ['Roteador',    'Wi-Fi 6 AX'],
                        ['Zaaz Play',   'Incluso'],
                        ['Zaaz Educa',  'Incluso'],
                        ['IP fixo',     'Incluso'],
                    ],
                    'featured' => false,
                    'cta'      => 'Quero 1 Giga',
                ],
            ];
            foreach ($plans as $plan):
            ?>
            <article class="p-plan p-reveal<?= $plan['featured'] ? ' p-plan--featured' : '' ?>"
                     itemscope itemtype="https://schema.org/Offer">

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
        </div>

        <p class="p-pricing-note">
            * Instalação gratuita. Preços válidos para residências nas áreas de cobertura MG, PR e SP. Valores mensais, sem taxa de adesão.
        </p>
    </div>
</section>
