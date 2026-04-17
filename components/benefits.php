<section id="beneficios" aria-labelledby="benefits-heading">
    <div class="container">
        <span class="section-label">Benefícios</span>
        <h2 class="section-title" id="benefits-heading">Tudo incluso, sem surpresas</h2>
        <p class="section-desc">Cada plano ZAAZ vem com o que você precisa para conectar a sua vida toda.</p>

        <div class="benefits-grid">
            <?php
            $benefits = [
                [
                    'icon'  => '<svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>',
                    'title' => 'Fibra óptica 100%',
                    'desc'  => 'Rede totalmente óptica do provedor até sua casa. Mais estabilidade e velocidade real, não prometida.',
                ],
                [
                    'icon'  => '<svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 9l4-4 4 4m0 6l-4 4-4-4"/></svg>',
                    'title' => 'Consumo ilimitado',
                    'desc'  => 'Sem franquia, sem corte de velocidade. Use à vontade o mês todo, todos os meses.',
                ],
                [
                    'icon'  => '<svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0114.08 0M1.42 9a16 16 0 0121.16 0M8.53 16.11a6 6 0 016.95 0M12 20h.01"/></svg>',
                    'title' => 'Roteador Wi-Fi 6 incluso',
                    'desc'  => 'O melhor padrão Wi-Fi atual, sem cobrar a mais. Sinal mais forte para mais dispositivos ao mesmo tempo.',
                ],
                [
                    'icon'  => '<svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="15" rx="2"/><polyline points="17 2 12 7 7 2"/></svg>',
                    'title' => 'Zaaz Play',
                    'desc'  => 'Plataforma de streaming com filmes, séries e canais ao vivo inclusa no seu plano. Entretenimento sem custo extra.',
                ],
                [
                    'icon'  => '<svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>',
                    'title' => 'Zaaz Educa',
                    'desc'  => 'Cursos, videoaulas e conteúdo educacional para toda a família, direto no seu plano de internet.',
                ],
                [
                    'icon'  => '<svg aria-hidden="true" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.5 19.79 19.79 0 01.22 1.72 2 2 0 012.22 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.91A16 16 0 0016.09 17.09l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0124 18z"/></svg>',
                    'title' => 'Suporte técnico 24h',
                    'desc'  => 'Equipe local especializada disponível 24 horas por dia, 7 dias por semana. Atendimento humano, não robô.',
                ],
            ];
            ?>

            <?php foreach ($benefits as $b): ?>
            <article class="benefit-card">
                <div class="benefit-icon"><?= $b['icon'] ?></div>
                <h3><?= htmlspecialchars($b['title']) ?></h3>
                <p><?= htmlspecialchars($b['desc']) ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
