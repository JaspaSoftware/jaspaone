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
            const whatsappUrl = `https://wa.me/27783437563?text=${encodeURIComponent(message)}`;

            // Open WhatsApp
            window.open(whatsappUrl, '_blank');

            // Close popup
            closePopup();
        });
    }

    // Handle Main Contact Form Submission
    const mainContactForm = document.getElementById('main-contact-form');
    const formMessage = document.getElementById('form-message');

    if (mainContactForm) {
        mainContactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(mainContactForm);
            const submitBtn = mainContactForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerText;

            submitBtn.disabled = true;
            submitBtn.innerText = 'Sending...';

            fetch('contact_handler.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(data => {
                    formMessage.style.display = 'block';
                    formMessage.innerText = data;

                    if (data.includes('Thank you')) {
                        formMessage.style.color = '#25D366'; // Success Green
                        mainContactForm.reset();
                    } else {
                        formMessage.style.color = '#ef4444'; // Error Red
                    }
                })
                .catch(error => {
                    formMessage.style.display = 'block';
                    formMessage.innerText = 'An error occurred. Please try again.';
                    formMessage.style.color = '#ef4444';
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerText = originalText;

                    // Clear message after 5 seconds
                    setTimeout(() => {
                        formMessage.style.display = 'none';
                    }, 5000);
                });
        });
    }

    // Scroll Animation Observer
    const revealElements = document.querySelectorAll('.feature-card, .section-header, .pricing-card, .comparison-table-wrapper, .faq-item, .contact-wrapper');

    // Add reveal class to elements initially
    revealElements.forEach(element => {
        element.classList.add('reveal');
    });

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px"
    });

    revealElements.forEach(element => {
        revealObserver.observe(element);
    });
});
