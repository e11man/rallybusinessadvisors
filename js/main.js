document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.nav');

    if (toggleButton && nav) {
        toggleButton.addEventListener('click', function() {
            nav.classList.toggle('nav-open');
            toggleButton.setAttribute('aria-expanded', nav.classList.contains('nav-open'));
        });
    }

    // Optional: Close menu on link click (if needed for your design)
    // const navLinks = document.querySelectorAll('.nav-link');
    // navLinks.forEach(link => {
    //     link.addEventListener('click', () => nav.classList.remove('nav-open'));
    // });
});