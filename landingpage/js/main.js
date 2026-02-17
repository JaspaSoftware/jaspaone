// Javascript for Jaspa One Landing Page

document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const navLinks = document.getElementById('nav-links');

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        });
    }

    // Smooth Scroll for Internal Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            // Close mobile menu if open
            if (navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // WhatsApp Popup - Show after 30 seconds
    const popup = document.getElementById('whatsapp-popup');
    const popupClose = document.getElementById('popup-close');
    const whatsappForm = document.getElementById('whatsapp-form');
    const closeAndTrial = document.getElementById('close-and-trial');

    // Show popup after 30 seconds
    setTimeout(() => {
        popup.classList.add('active');
    }, 30000); // 30 seconds

    // Close popup
    const closePopup = () => {
        popup.classList.remove('active');
    };

    if (popupClose) {
        popupClose.addEventListener('click', closePopup);
    }

    if (closeAndTrial) {
        closeAndTrial.addEventListener('click', closePopup);
    }

    // Close popup when clicking outside
    popup.addEventListener('click', (e) => {
        if (e.target === popup) {
            closePopup();
        }
    });

    // Handle WhatsApp form submission
    if (whatsappForm) {
        whatsappForm.addEventListener('submit', (e) => {
            e.preventDefault();

            const name = document.getElementById('user-name').value;
            const business = document.getElementById('business-type').value;
            const phone = document.getElementById('user-phone').value;

            // Construct WhatsApp message
            const message = `Hi! I'm ${name} from ${business}. I'd like to learn more about Jaspa One for my business. My number is ${phone}.`;
            const whatsappUrl = `https://wa.me/27XXXXXXXXX?text=${encodeURIComponent(message)}`;

            // Open WhatsApp
            window.open(whatsappUrl, '_blank');

            // Close popup
            closePopup();
        });
    }
});
