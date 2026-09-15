// Menu mobile (abre/fecha o nav no header em telas estreitas)
const menuToggle = document.getElementById('LPMenuToggle');
const mobileNav = document.getElementById('LPMobileNav');

if (menuToggle && mobileNav) {
    menuToggle.addEventListener('click', () => {
        const isOpen = mobileNav.classList.toggle('LP-open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.querySelector('i').className = isOpen ? 'bi bi-x' : 'bi bi-list';
    });

    mobileNav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            mobileNav.classList.remove('LP-open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.querySelector('i').className = 'bi bi-list';
        });
    });
}

// Reveal suave dos blocos ao entrarem na tela
const revealTargets = document.querySelectorAll('[data-reveal]');

if (revealTargets.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('LP-in-view');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    revealTargets.forEach((target) => observer.observe(target));
} else {
    revealTargets.forEach((target) => target.classList.add('LP-in-view'));
}
