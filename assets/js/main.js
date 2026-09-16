// Mobile-Navigation
const navToggle = document.getElementById('navToggle');
const nav = document.getElementById('nav');
const header = document.getElementById('header');

if (navToggle && nav) {
    navToggle.addEventListener('click', () => {
        const open = nav.classList.toggle('is-open');
        navToggle.classList.toggle('is-open', open);
        navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    nav.querySelectorAll('.nav__item--has-sub > .nav__link').forEach(link => {
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 760) { e.preventDefault(); link.parentElement.classList.toggle('is-expanded'); }
        });
    });
}

// Header-Schatten + Zum-Anfang-Button beim Scrollen
const toTop = document.getElementById('toTop');
const onScroll = () => {
    if (header) header.classList.toggle('is-scrolled', window.scrollY > 8);
    if (toTop) toTop.classList.toggle('is-visible', window.scrollY > 500);
};
window.addEventListener('scroll', onScroll, { passive: true });
onScroll();

if (toTop) toTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
