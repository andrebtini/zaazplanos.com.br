<section id="planos" style="background:var(--color-surface)" aria-labelledby="pricing-heading">
    <div class="container text-center">
        <span class="section-label">Planos</span>
        <h2 class="section-title" id="pricing-heading" style="margin-inline:auto">Preços simples e transparentes</h2>
        <p class="section-desc" style="margin-inline:auto">Sem taxas escondidas. Cancele quando quiser.</p>

        <div class="pricing-grid">
            <?php
            $plans = [
                [
                    'name'     => 'Starter',
                    'price'    => 'R$ 97',
                    'period'   => '/mês',
                    'desc'     => 'Ideal para quem está começando.',
                    'features' => ['Até 3 usuários', '5 GB de armazenamento', 'Suporte por e-mail', 'Relatórios básicos'],
                    'featured' => false,
                    'cta'      => 'Começar agora',
                ],
                [
                    'name'     => 'Pro',
                    'price'    => 'R$ 197',
                    'period'   => '/mês',
                    'desc'     => 'Para negócios em crescimento.',
                    'features' => ['Usuários ilimitados', '50 GB de armazenamento', 'Suporte prioritário', 'Relatórios avançados', 'Integrações premium'],
                    'featured' => true,
                    'cta'      => 'Escolher Pro',
                ],
                [
                    'name'     => 'Enterprise',
                    'price'    => 'Sob consulta',
                    'period'   => '',
                    'desc'     => 'Solução personalizada para grandes times.',
                    'features' => ['Tudo do Pro', 'SLA garantido', 'Gerente de conta dedicado', 'Customizações exclusivas'],
                    'featured' => false,
                    'cta'      => 'Falar com vendas',
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
                    <?= htmlspecialchars($plan['price']) ?>
                    <span itemprop="priceCurrency" content="BRL"><?= htmlspecialchars($plan['period']) ?></span>
                </p>

                <ul>
                    <?php foreach ($plan['features'] as $feat): ?>
                    <li><?= htmlspecialchars($feat) ?></li>
                    <?php endforeach; ?>
                </ul>

                <a href="#contato" class="btn <?= $plan['featured'] ? 'btn-primary' : '' ?>" style="<?= !$plan['featured'] ? 'background:var(--color-surface);border:2px solid var(--color-primary);color:var(--color-primary);' : '' ?>width:100%;justify-content:center">
                    <?= htmlspecialchars($plan['cta']) ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
