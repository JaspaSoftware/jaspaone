<?php 
$pageTitle = "Contact Us | Jaspa One Support";
$pageDescription = "Get in touch with the Jaspa One team. Email us via jaspaone@jaspa.co.za or chat on WhatsApp +27 78 343 7563.";
include 'includes/header.php'; 
?>

<section class="hero" style="min-height: 50vh; height: auto; padding-top: 120px; padding-bottom: 60px;">
    <div class="container hero-content">
        <h1>Get In Touch</h1>
        <p>Have questions? We're here to help you automate your business.</p>
    </div>
</section>

<section id="contact-content" style="background-color: var(--bg-card); padding: 80px 0;">
    <div class="container">
        <div class="contact-wrapper" style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: center;">
            <div class="contact-info" style="flex: 1; min-width: 300px;">
                <div style="margin-bottom: 30px;">
                    <i class="fas fa-envelope feature-icon"></i>
                    <h3>Email Us</h3>
                    <p>jaspaone@jaspa.co.za</p>
                </div>
                <div>
                    <i class="fab fa-whatsapp feature-icon"></i>
                    <h3>WhatsApp</h3>
                    <p>+27 78 343 7563</p>
                </div>
                
                <div style="margin-top: 40px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);">
                    <h3>Follow Us</h3>
                    <div style="display: flex; gap: 20px; margin-top: 15px;">
                        <a href="#" style="font-size: 24px; color: var(--text-color);"><i class="fab fa-facebook"></i></a>
                        <a href="#" style="font-size: 24px; color: var(--text-color);"><i class="fab fa-linkedin"></i></a>
                        <a href="#" style="font-size: 24px; color: var(--text-color);"><i class="fab fa-youtube"></i></a>
                        <a href="#" style="font-size: 24px; color: var(--text-color);"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form-container" style="flex: 1; min-width: 300px; background: var(--bg-dark); padding: 40px; border-radius: 20px; border: 1px solid rgba(255,255,255,0.05);">
                <form id="main-contact-form">
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="name" style="display: block; margin-bottom: 5px; color: var(--text-muted);">Name</label>
                        <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #333; background: #0f172a; color: white;">
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="email" style="display: block; margin-bottom: 5px; color: var(--text-muted);">Email</label>
                        <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #333; background: #0f172a; color: white;">
                    </div>
                     <div class="form-group" style="margin-bottom: 20px;">
                        <label for="department" style="display: block; margin-bottom: 5px; color: var(--text-muted);">Department</label>
                        <select id="department" name="department" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #333; background: #0f172a; color: white;">
                            <option value="General">General Inquiry</option>
                            <option value="Sales">Sales</option>
                            <option value="Support">Support</option>
                            <option value="Billing">Billing</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="message" style="display: block; margin-bottom: 5px; color: var(--text-muted);">Message</label>
                        <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #333; background: #0f172a; color: white;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
                <div id="form-message" style="margin-top: 15px; text-align: center; display: none;"></div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
