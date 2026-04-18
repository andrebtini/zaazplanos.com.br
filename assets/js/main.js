// Carrega apenas quando o DOM estiver pronto (defer garante isso)

// Intercepta cliques nos botões de WhatsApp e abre o widget
document.querySelectorAll('[data-widget]').forEach(btn => {
    btn.addEventListener('click', e => {
        e.preventDefault();
        const widgetBtn = document.querySelector(
            '[class*="whatsapp"], [class*="widget"], [id*="whatsapp"], [id*="widget"], ' +
            'a[href*="wa.me"], a[href*="whatsapp"]'
        );
        if (widgetBtn) {
            widgetBtn.click();
        }
    });
});

// Smooth scroll para âncoras
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
        const target = document.querySelector(anchor.getAttribute('href'));
        if (target) {
            e.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Lazy load de imagens (fallback para browsers sem suporte nativo)
if ('loading' in HTMLImageElement.prototype === false) {
    const images = document.querySelectorAll('img[loading="lazy"]');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                observer.unobserve(img);
            }
        });
    });
    images.forEach(img => observer.observe(img));
}
