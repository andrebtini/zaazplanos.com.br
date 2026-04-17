<section id="funcionalidades" aria-labelledby="features-heading">
    <div class="container">
        <span class="section-label">Funcionalidades</span>
        <h2 class="section-title" id="features-heading">Tudo que você precisa em um só lugar</h2>
        <p class="section-desc">Ferramentas pensadas para simplificar sua operação e impulsionar seus resultados.</p>

        <div class="card-grid">
            <?php
            $features = [
                ['icon' => '⚡', 'title' => 'Rápido e confiável',   'desc' => 'Infraestrutura de alto desempenho com uptime garantido.'],
                ['icon' => '🔒', 'title' => 'Segurança total',       'desc' => 'Seus dados protegidos com criptografia ponta-a-ponta.'],
                ['icon' => '📊', 'title' => 'Relatórios em tempo real','desc' => 'Acompanhe métricas e tome decisões mais inteligentes.'],
                ['icon' => '🤝', 'title' => 'Suporte dedicado',      'desc' => 'Equipe especializada disponível para te ajudar sempre.'],
                ['icon' => '🔗', 'title' => 'Integrações fáceis',    'desc' => 'Conecte com as ferramentas que você já usa.'],
                ['icon' => '📱', 'title' => 'Multi-plataforma',      'desc' => 'Acesse de qualquer dispositivo, em qualquer lugar.'],
            ];

            foreach ($features as $f): ?>
            <article class="card">
                <span aria-hidden="true" style="font-size:2rem;line-height:1"><?= $f['icon'] ?></span>
                <h3 style="margin-top:.75rem;font-size:1.1rem;font-weight:700"><?= htmlspecialchars($f['title']) ?></h3>
                <p style="margin-top:.5rem;color:var(--color-muted);font-size:.95rem"><?= htmlspecialchars($f['desc']) ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
