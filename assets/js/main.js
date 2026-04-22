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
