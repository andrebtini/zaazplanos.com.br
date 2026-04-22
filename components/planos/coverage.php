<section id="cobertura" class="p-coverage" aria-labelledby="p-coverage-heading">
    <div class="container">
        <div class="p-section-head p-reveal">
            <p class="p-section-kicker">
                <span>Cobertura</span>
                <span>03 &nbsp;/&nbsp; 05</span>
            </p>
            <h2 class="p-section-title" id="p-coverage-heading">Presente em<br>MG, PR e SP.</h2>
        </div>

        <div class="p-coverage-layout">
            <div class="p-coverage-states p-reveal">
                <?php
                $states = [
                    ['uf' => 'MG', 'name' => 'Minas Gerais', 'cities' => ['Uberlândia', 'Uberaba', 'Patos de Minas', 'Ituiutaba', 'Araguari']],
                    ['uf' => 'PR', 'name' => 'Paraná',       'cities' => ['Londrina', 'Maringá', 'Cascavel', 'Ponta Grossa', 'Apucarana']],
                    ['uf' => 'SP', 'name' => 'São Paulo',    'cities' => ['Ribeirão Preto', 'São José do Rio Preto', 'Bauru', 'Franca', 'Araraquara']],
                ];
                foreach ($states as $state):
                ?>
                <div class="p-state">
                    <div class="p-state-uf"><?= $state['uf'] ?></div>
                    <p class="p-state-name"><?= $state['name'] ?></p>
                    <ul class="p-state-cities">
                        <?php foreach ($state['cities'] as $city): ?>
                        <li><?= htmlspecialchars($city) ?></li>
                        <?php endforeach; ?>
                        <li class="p-more">+ outras cidades</li>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>

            <aside class="p-coverage-card p-reveal">
                <h3>Tem cobertura na sua rua?</h3>
                <p>A consulta é grátis e leva menos de 1 minuto pelo WhatsApp.</p>
                <a href="#" class="p-btn p-btn-highlight p-btn-lg" data-wl-open style="width:100%;justify-content:center">
                    Verificar meu endereço
                    <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </aside>
        </div>
    </div>
</section>
