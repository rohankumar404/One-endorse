document.addEventListener('DOMContentLoaded', function() {
    const faqToggles = document.querySelectorAll('.faq-toggle');
    
    faqToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            // Close all other FAQs
            faqToggles.forEach(otherToggle => {
                if (otherToggle !== this) {
                    otherToggle.classList.remove('active');
                    const otherContent = otherToggle.nextElementSibling;
                    otherContent.classList.remove('show');
                }
            });
            
            // Toggle current FAQ
            this.classList.toggle('active');
            const content = this.nextElementSibling;
            content.classList.toggle('show');
        });
    });
});