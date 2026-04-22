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
