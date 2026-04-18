// Carrega apenas quando o DOM estiver pronto (defer garante isso)

// Abre o painel do widget MarketingSuite
function openLeadsWidget() {
    var panel = document.getElementById('wl-panel');
    if (!panel) return;
    panel.classList.add('wl-open');
    setTimeout(function () {
        var first = document.querySelector('#wl-body .wl-f');
        if (first) first.focus();
    }, 260);
}

// Intercepta cliques nos botões de WhatsApp e abre o widget
document.querySelectorAll('[data-widget]').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        openLeadsWidget();
    });
});

// Smooth scroll para âncoras (exclui botões de widget e href="#")
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    if (anchor.hasAttribute('data-widget')) return;
    anchor.addEventListener('click', function (e) {
        var hash = anchor.getAttribute('href');
        if (!hash || hash === '#') return;
        var target = document.querySelector(hash);
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Lazy load de imagens (fallback para browsers sem suporte nativo)
if ('loading' in HTMLImageElement.prototype === false) {
    var images = document.querySelectorAll('img[loading="lazy"]');
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var img = entry.target;
                img.src = img.dataset.src || img.src;
                observer.unobserve(img);
            }
        });
    });
    images.forEach(function (img) { observer.observe(img); });
}
