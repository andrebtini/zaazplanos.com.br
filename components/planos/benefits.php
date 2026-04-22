<section id="beneficios" class="p-benefits" aria-labelledby="p-benefits-heading">
    <div class="container">
        <div class="p-section-head p-reveal">
            <p class="p-section-kicker">
                <span>Tudo incluso</span>
                <span>02 &nbsp;/&nbsp; 05</span>
            </p>
            <h2 class="p-section-title" id="p-benefits-heading">Sem surpresas<br>no fim do mês.</h2>
            <p class="p-section-desc">
                Cada plano ZAAZ vem com o que você precisa para conectar a vida toda &mdash; sem custos adicionais, sem letras miúdas.
            </p>
        </div>

        <div class="p-benefits-grid">
            <?php
            $benefits = [
                ['n' => '01', 'title' => 'Fibra óptica 100%',       'desc' => 'Rede totalmente óptica do provedor até a sua casa. Mais estabilidade e velocidade real, não prometida.'],
                ['n' => '02', 'title' => 'Consumo ilimitado',       'desc' => 'Sem franquia e sem corte de velocidade em nenhum momento do mês, todos os meses.'],
                ['n' => '03', 'title' => 'Roteador Wi-Fi 6',        'desc' => 'O melhor padrão Wi-Fi atual já incluso. Sinal mais forte para mais dispositivos simultâneos.'],
                ['n' => '04', 'title' => 'Zaaz Play',               'desc' => 'Plataforma de streaming com filmes, séries e canais ao vivo &mdash; inclusa no plano.'],
                ['n' => '05', 'title' => 'Zaaz Educa',              'desc' => 'Cursos, videoaulas e conteúdo educacional para toda a família, direto no seu plano.'],
                ['n' => '06', 'title' => 'Suporte 24h, humano',     'desc' => 'Equipe local especializada disponível 7 dias por semana. Atendimento sem robô.'],
            ];
            foreach ($benefits as $b):
            ?>
            <article class="p-benefit p-reveal">
                <span class="p-benefit-num"><?= $b['n'] ?></span>
                <h3><?= $b['title'] ?></h3>
                <p><?= $b['desc'] ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
