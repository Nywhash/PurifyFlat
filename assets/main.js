document.addEventListener('DOMContentLoaded', function () {
    /* Navbar Start */
    const menuToggle = document.querySelector('.nf_menu-toggle');
    const navLinks = document.querySelector('.nf_nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function () {
            const isOpen = navLinks.classList.toggle('nf_mobile-active');
            menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }
    /* Navbar End */

    /* FAQ Start */
    const faqItems = document.querySelectorAll('.nf_faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.nf_faq-question');
        if (!question) return;

        question.addEventListener('click', function () {
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            item.classList.toggle('active');
        });
    });
    /* FAQ End */
});
