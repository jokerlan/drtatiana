import './bootstrap';
window.addEventListener('scroll', function () {
    const nav = document.querySelector('nav');
    if (window.scrollY > 10) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('nav');
    const logoMerge = document.querySelector('.logo-merge');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            nav.classList.add('scrolled');
            logoMerge.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
            logoMerge.classList.remove('scrolled');
        }
    });
});

