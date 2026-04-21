(function () {
  'use strict';

  /* ── Header scroll state ── */
  var header = document.querySelector('.v3-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    }, { passive: true });
  }

  /* ── Mobile menu ── */
  var hamburger  = document.getElementById('v3-hamburger');
  var mobileMenu = document.getElementById('v3-mobile-menu');
  var closeBtn   = document.getElementById('v3-mobile-close');

  function openMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.add('open');
    hamburger.classList.add('open');
    hamburger.setAttribute('aria-expanded', 'true');
    mobileMenu.removeAttribute('aria-hidden');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.remove('open');
    hamburger.classList.remove('open');
    hamburger.setAttribute('aria-expanded', 'false');
    mobileMenu.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  if (hamburger) hamburger.addEventListener('click', openMenu);
  if (closeBtn)  closeBtn.addEventListener('click', closeMenu);
  if (mobileMenu) {
    mobileMenu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', closeMenu);
    });
  }

  /* ── Scroll reveal ── */
  var reveals = document.querySelectorAll('.v3-reveal');
  if ('IntersectionObserver' in window && reveals.length) {
    var revealIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          revealIO.unobserve(e.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(function (el) { revealIO.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('visible'); });
  }

  /* ── Plan card speed bars (IntersectionObserver) ── */
  var planCards = document.querySelectorAll('.v3-plan');
  if ('IntersectionObserver' in window && planCards.length) {
    var planIO = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add('in-view');
          planIO.unobserve(e.target);
        }
      });
    }, { threshold: 0.2 });
    planCards.forEach(function (el) { planIO.observe(el); });
  } else {
    planCards.forEach(function (el) { el.classList.add('in-view'); });
  }

  /* ── Hero speed cards: animate bars + count-up on load ── */
  function animateSpeedCards() {
    var cards = document.querySelectorAll('.v3-speed-card');
    cards.forEach(function (card) {
      setTimeout(function () {
        card.classList.add('animated');
      }, parseFloat(card.style.getPropertyValue('--bar-delay') || '0') * 1000 + 600);
    });
  }

  /* ── Count-up ── */
  function countUp(el) {
    var target = parseInt(el.getAttribute('data-target'), 10);
    if (isNaN(target)) return;
    var duration = 900;
    var start = performance.now();
    function step(now) {
      var p = Math.min((now - start) / duration, 1);
      var ease = 1 - Math.pow(1 - p, 3);
      el.textContent = Math.round(ease * target);
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  var counters = document.querySelectorAll('.v3-count');
  if (counters.length) {
    if ('IntersectionObserver' in window) {
      var countIO = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) {
            countUp(e.target);
            countIO.unobserve(e.target);
          }
        });
      }, { threshold: 0.5 });
      counters.forEach(function (el) { countIO.observe(el); });
    } else {
      counters.forEach(countUp);
    }
  }

  /* ── Init ── */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', animateSpeedCards);
  } else {
    animateSpeedCards();
  }

})();
