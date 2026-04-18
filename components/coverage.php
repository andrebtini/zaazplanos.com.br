<section id="cobertura" aria-labelledby="coverage-heading">
    <div class="container">
        <span class="section-label">Cobertura</span>
        <h2 class="section-title" id="coverage-heading">Presente em MG, PR e SP</h2>
        <p class="section-desc">Expandindo continuamente para levar fibra óptica para mais cidades.</p>

        <div class="coverage-layout">
            <div class="coverage-states">
                <?php
                $states = [
                    [
                        'uf'     => 'MG',
                        'name'   => 'Minas Gerais',
                        'cities' => ['Uberlândia', 'Uberaba', 'Patos de Minas', 'Ituiutaba', 'Araguari'],
                    ],
                    [
                        'uf'     => 'PR',
                        'name'   => 'Paraná',
                        'cities' => ['Londrina', 'Maringá', 'Cascavel', 'Ponta Grossa', 'Apucarana'],
                    ],
                    [
                        'uf'     => 'SP',
                        'name'   => 'São Paulo',
                        'cities' => ['Ribeirão Preto', 'São José do Rio Preto', 'Bauru', 'Franca', 'Araraquara'],
                    ],
                ];
                ?>

                <?php foreach ($states as $state): ?>
                <div class="coverage-state">
                    <div class="state-badge" aria-hidden="true"><?= htmlspecialchars($state['uf']) ?></div>
                    <div>
                        <strong><?= htmlspecialchars($state['name']) ?></strong>
                        <ul class="city-list">
                            <?php foreach ($state['cities'] as $city): ?>
                            <li><?= htmlspecialchars($city) ?></li>
                            <?php endforeach; ?>
                            <li class="city-more">e mais cidades…</li>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="coverage-cta-box">
                <p class="coverage-cta-title">Minha cidade tem cobertura?</p>
                <p>Consulte a disponibilidade no seu endereço antes de contratar. É rápido e gratuito.</p>
                <a href="<?= WHATSAPP ?>&text=<?= urlencode('Olá! Quero verificar se meu endereço tem cobertura ZAAZ.') ?>"
                   target="_blank" rel="noopener noreferrer"
                   class="btn btn-primary" data-widget>
                    Verificar meu endereço
                </a>
            </div>
        </div>
    </div>
</section>
