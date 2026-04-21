<section id="cobertura" class="v3-coverage" aria-labelledby="v3-coverage-heading">
    <div class="container">
        <span class="section-label">Cobertura</span>
        <h2 class="section-title" id="v3-coverage-heading">PRESENTE EM<br>MG, PR E SP.</h2>
        <p class="section-desc">Expandindo continuamente para levar fibra óptica para mais cidades.</p>

        <div class="v3-coverage-layout">
            <div class="v3-coverage-states v3-reveal">
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
                <div class="v3-coverage-state">
                    <div class="v3-state-badge" aria-hidden="true"><?= htmlspecialchars($state['uf']) ?></div>
                    <p class="v3-state-name"><?= htmlspecialchars($state['name']) ?></p>
                    <ul class="v3-city-list">
                        <?php foreach ($state['cities'] as $city): ?>
                        <li><?= htmlspecialchars($city) ?></li>
                        <?php endforeach; ?>
                        <li class="v3-city-more">e mais cidades&hellip;</li>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="v3-coverage-cta-box v3-reveal">
                <p>Minha cidade<br>tem cobertura?</p>
                <p>Consulte a disponibilidade no seu endereço antes de contratar. É rápido e gratuito.</p>
                <a href="#" class="btn btn-primary" data-wl-open>
                    Verificar meu endereço
                    <svg aria-hidden="true" width="15" height="15" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
