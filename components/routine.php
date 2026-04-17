<section id="rotina" aria-labelledby="routine-heading" style="background:var(--color-surface)">
    <div class="container">
        <span class="section-label">No seu dia a dia</span>
        <h2 class="section-title" id="routine-heading">Internet que acompanha cada momento</h2>
        <p class="section-desc">Da manhã à noite, a fibra ZAAZ sustenta tudo o que você faz.</p>

        <div class="routine-list">
            <?php
            $routines = [
                [
                    'emoji' => '🎬',
                    'title' => 'Streaming 4K sem travar',
                    'desc'  => 'Netflix, Disney+, Prime Video e Zaaz Play em Ultra HD simultâneo em toda a casa. Sem buffering, sem frustração.',
                ],
                [
                    'emoji' => '💼',
                    'title' => 'Home office com estabilidade',
                    'desc'  => 'Videochamadas no Teams, Zoom e Meet sem queda de conexão. Upload rápido para enviar arquivos grandes em segundos.',
                ],
                [
                    'emoji' => '🎮',
                    'title' => 'Gaming sem lag',
                    'desc'  => 'Latência baixa e velocidade simétrica para jogar online sem desculpas. Xbox, PlayStation, PC — conecte tudo.',
                ],
                [
                    'emoji' => '📱',
                    'title' => 'Todos os dispositivos conectados',
                    'desc'  => 'Smartphones, tablets, smart TVs, câmeras e assistentes de voz. O Wi-Fi 6 sustenta dezenas de aparelhos ao mesmo tempo.',
                ],
                [
                    'emoji' => '📚',
                    'title' => 'Estudo online para toda a família',
                    'desc'  => 'Plataformas EAD, Zaaz Educa e videosaulas em HD para as crianças estudarem enquanto os adultos trabalham.',
                ],
                [
                    'emoji' => '🏠',
                    'title' => 'Casa inteligente conectada',
                    'desc'  => 'Câmeras de segurança, fechaduras, termostatos e automação residencial funcionando 24h sem interrupção.',
                ],
            ];
            ?>

            <?php foreach ($routines as $r): ?>
            <div class="routine-item">
                <span class="routine-emoji" aria-hidden="true"><?= $r['emoji'] ?></span>
                <div>
                    <h3><?= htmlspecialchars($r['title']) ?></h3>
                    <p><?= htmlspecialchars($r['desc']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
