/* ZAAZ v2 — main.js */

(function () {
    'use strict';

    // ── Hamburger menu ──────────────────────────────────
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeBtn = document.getElementById('mobile-menu-close');

    function openMenu() {
        hamburger.classList.add('open');
        mobileMenu.classList.add('open');
        hamburger.setAttribute('aria-expanded', 'true');
        mobileMenu.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.contains('open') ? closeMenu() : openMenu();
        });

        if (closeBtn) closeBtn.addEventListener('click', closeMenu);

        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeMenu);
        });

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape' && hamburger.classList.contains('open')) closeMenu();
        });
    }

    // ── Smooth scroll ───────────────────────────────────
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        if (anchor.hasAttribute('data-wl-open')) return;
        anchor.addEventListener('click', function (e) {
            const id = this.getAttribute('href');
            if (id === '#') return;
            const target = document.querySelector(id);
            if (target) {
                e.preventDefault();
                closeMenu();
                setTimeout(() => {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }, 50);
            }
        });
    });

    // ── Header scroll state ─────────────────────────────
    const header = document.querySelector('.site-header');
    if (header) {
        const onScroll = () => {
            header.classList.toggle('scrolled', window.scrollY > 60);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    // ── Scroll reveal ───────────────────────────────────
    if ('IntersectionObserver' in window) {
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (!prefersReduced) {
            const revealObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.08, rootMargin: '0px 0px -32px 0px' });

            const selectors = [
                '.benefit-card',
                '.plan',
                '.routine-item',
                '.why-card',
                '.step',
                'details',
                '.coverage-state',
                '.coverage-cta-box',
            ];

            document.querySelectorAll(selectors.join(',')).forEach((el, i) => {
                el.classList.add('reveal');
                const col = i % 3;
                if (col === 1) el.classList.add('reveal-d1');
                if (col === 2) el.classList.add('reveal-d2');
                revealObserver.observe(el);
            });
        }
    }

})();
