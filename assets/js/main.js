// Carrega apenas quando o DOM estiver pronto (defer garante isso)

// Mobile menu
(function () {
    var hamburger = document.getElementById('hamburger');
    var menu = document.getElementById('mobile-menu');
    var closeBtn = document.getElementById('mobile-menu-close');
    if (!hamburger || !menu) return;

    var savedScrollY = 0;
    var isOpen = false;

    function openMenu() {
        if (isOpen) return;
        isOpen = true;
        // iOS-safe scroll lock: pin body and preserve scroll position
        savedScrollY = window.scrollY;
        document.body.style.position = 'fixed';
        document.body.style.top = '-' + savedScrollY + 'px';
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';

        menu.classList.add('open');
        hamburger.classList.add('open');
        hamburger.setAttribute('aria-expanded', 'true');
        menu.removeAttribute('aria-hidden');

        // Move focus into the menu for a11y
        window.setTimeout(function () {
            if (closeBtn) closeBtn.focus();
        }, 320);
    }

    function closeMenu() {
        if (!isOpen) return;
        isOpen = false;

        menu.classList.remove('open');
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');

        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.left = '';
        document.body.style.right = '';
        document.body.style.width = '';
        window.scrollTo(0, savedScrollY);

        hamburger.focus();
    }

    hamburger.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    menu.querySelectorAll('a').forEach(function (a) {
        a.addEventListener('click', closeMenu);
    });
    // Click on backdrop (outside nav/cta/close) closes
    menu.addEventListener('click', function (e) {
        if (e.target === menu) closeMenu();
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && isOpen) closeMenu();
    });
})();

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

// Plan carousel
(function () {
    function initCarousels() {
        document.querySelectorAll('[data-carousel]').forEach(function (carousel) {
            var viewport = carousel.querySelector('[data-carousel-viewport]');
            var track    = carousel.querySelector('[data-carousel-track]');
            var slides   = carousel.querySelectorAll('[data-carousel-slide]');
            var prevBtn  = carousel.querySelector('[data-carousel-prev]');
            var nextBtn  = carousel.querySelector('[data-carousel-next]');
            var dots     = carousel.querySelectorAll('[data-carousel-dot]');

            if (!track || slides.length === 0) return;

            var idx = 0;

            function visible() { return window.innerWidth >= 960 ? 3 : 1; }
            function maxIdx()  { return Math.max(0, slides.length - visible()); }

            function setWidths() {
                var vw  = viewport.offsetWidth;
                var vis = visible();
                var gap = vis > 1 ? (parseFloat(getComputedStyle(track).gap) || 20) : 0;
                var w   = (vw - (vis - 1) * gap) / vis;
                carousel.style.setProperty('--slide-w', w + 'px');
            }

            function go(n) {
                idx = Math.max(0, Math.min(n, maxIdx()));
                track.style.transform = 'translateX(-' + slides[idx].offsetLeft + 'px)';
                if (prevBtn) prevBtn.disabled = idx === 0;
                if (nextBtn) nextBtn.disabled = idx >= maxIdx();
                var max = maxIdx();
                dots.forEach(function (dot, i) {
                    dot.style.display = i <= max ? '' : 'none';
                    dot.classList.toggle('active', i === idx);
                });
            }

            if (prevBtn) prevBtn.addEventListener('click', function () { go(idx - 1); });
            if (nextBtn) nextBtn.addEventListener('click', function () { go(idx + 1); });
            dots.forEach(function (dot, i) {
                dot.addEventListener('click', function () { go(i); });
            });

            var resizeTimer;
            window.addEventListener('resize', function () {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function () { setWidths(); go(Math.min(idx, maxIdx())); }, 80);
            }, { passive: true });

            setWidths();
            go(0);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCarousels);
    } else {
        initCarousels();
    }
})();
