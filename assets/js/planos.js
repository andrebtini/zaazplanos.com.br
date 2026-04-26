(function () {
    'use strict';

    /* ── Sticky header scroll state ── */
    var header = document.querySelector('.p-header');
    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('scrolled', window.scrollY > 24);
        }, { passive: true });
    }

    /* ── Mobile menu ── */
    var hamburger = document.getElementById('p-hamburger');
    var menu      = document.getElementById('p-mobile-menu');
    var closeBtn  = document.getElementById('p-mobile-close');

    var savedY = 0;
    var isOpen = false;

    function lockBody() {
        savedY = window.scrollY;
        document.body.style.position = 'fixed';
        document.body.style.top = '-' + savedY + 'px';
        document.body.style.left = '0';
        document.body.style.right = '0';
        document.body.style.width = '100%';
    }
    function unlockBody() {
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.left = '';
        document.body.style.right = '';
        document.body.style.width = '';
        window.scrollTo(0, savedY);
    }

    function openMenu() {
        if (!menu || isOpen) return;
        isOpen = true;
        lockBody();
        menu.classList.add('open');
        hamburger.classList.add('open');
        hamburger.setAttribute('aria-expanded', 'true');
        menu.removeAttribute('aria-hidden');
        window.setTimeout(function () { if (closeBtn) closeBtn.focus(); }, 380);
    }

    function closeMenu() {
        if (!menu || !isOpen) return;
        isOpen = false;
        menu.classList.remove('open');
        hamburger.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
        unlockBody();
        if (hamburger) hamburger.focus();
    }

    if (hamburger) hamburger.addEventListener('click', openMenu);
    if (closeBtn)  closeBtn.addEventListener('click', closeMenu);
    if (menu) {
        menu.querySelectorAll('a').forEach(function (a) { a.addEventListener('click', closeMenu); });
        menu.addEventListener('click', function (e) { if (e.target === menu) closeMenu(); });
    }
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && isOpen) closeMenu();
    });

    /* ── Scroll reveal ── */
    var reveals = document.querySelectorAll('.p-reveal');
    if ('IntersectionObserver' in window && reveals.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
        reveals.forEach(function (el) { io.observe(el); });
    } else {
        reveals.forEach(function (el) { el.classList.add('visible'); });
    }

})();

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
                var gap = vis > 1 ? (parseFloat(getComputedStyle(track).gap) || 24) : 0;
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
