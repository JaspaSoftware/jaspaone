    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="logo">Jaspa One.</h3>
                    <p style="color: var(--text-muted)">The Business Management System that runs on auto-pilot. Built for SMMEs and entrepreneurs.</p>
                </div>
                <div>
                    <h4>Product</h4>
                    <ul>
                        <li><a href="index.php#features">Features</a></li>
                        <li><a href="index.php#price">Pricing</a></li>
                        <li><a href="partners.php">Partners</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="terms.php">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> jaspaone@jaspa.co.za</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                 <p>&copy; <?php echo date("Y"); ?> <a href="https://www.jaspa.tec" target="_blank" style="color: inherit;">Jaspa Technologies</a>. All Rights Reserved.</p>
                 <p style="font-size: 0.8rem; margin-top: 10px; color: var(--text-muted);">
                    Hosted by <a href="https://www.sbuhost.co.za" target="_blank" style="color: var(--primary-color);">Sbuhost</a> | 
                    Developed by <a href="https://www.jaspa.co.za/web-design.php" target="_blank" style="color: var(--primary-color);">Jaspa</a>
                 </p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Popup -->
    <div id="whatsapp-popup" class="popup-overlay">
        <div class="popup-content">
            <button class="popup-close" id="popup-close">&times;</button>
            <div class="popup-header">
                <i class="fab fa-whatsapp" style="font-size: 48px; color: #25D366;"></i>
                <h3>Let's Chat About Your Business</h3>
                <p>Get a personalized demo and see how Jaspa One can transform your operations.</p>
            </div>
            <form id="whatsapp-form" class="popup-form">
                <input type="text" id="user-name" placeholder="Your Name" required>
                <input type="text" id="business-type" placeholder="Type of Business" required>
                <input type="tel" id="user-phone" placeholder="WhatsApp Number" required>
                <button type="submit" class="btn btn-primary">
                    <i class="fab fa-whatsapp"></i> Connect on WhatsApp
                </button>
            </form>
            <p style="text-align: center; font-size: 0.9rem; color: var(--text-muted); margin-top: 15px;">
                Or <a href="index.php#contact" id="close-and-trial" style="color: var(--primary-color);">Start Free Trial</a>
            </p>
        </div>
    </div>

    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>
