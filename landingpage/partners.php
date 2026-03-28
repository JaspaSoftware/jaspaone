<?php 
$pageTitle = "Jaspa One | Partners & Resellers";
$pageDescription = "Join the Jaspa One partner network. Become a reseller or certified consultant and help businesses automate their operations.";
include 'includes/header.php'; 
?>

    <section style="padding: 120px 0 60px; background: var(--bg-light);">
        <div class="container">
            <div class="section-header">
                <small style="color: var(--primary-color); font-weight: 600; text-transform: uppercase;">Partnerships</small>
                <h1 style="color: var(--secondary-color); margin-top: 10px;">Partner With Jaspa One</h1>
                <p style="color: var(--text-muted);">Help South African SMMEs grow while building your own recurring revenue stream.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-handshake feature-icon"></i>
                    <h3>Reseller Program</h3>
                    <p>Earn generous commissions by introducing Jaspa One to your network. We provide all the marketing collateral and sales support you need to succeed.</p>
                </div>

                <div class="feature-card">
                    <i class="fas fa-certificate feature-icon"></i>
                    <h3>Certified Consultant</h3>
                    <p>Help businesses implement and optimize Jaspa One. Ideal for business coaches, accountants, and IT professionals who want to offer automation services.</p>
                </div>

                <div class="feature-card">
                    <i class="fas fa-code feature-icon"></i>
                    <h3>Integration Partner</h3>
                    <p>Build custom integrations and tools on top of the Jaspa One ecosystem. Access our API and developer community to expand your service offering.</p>
                </div>
            </div>

            <div style="background: var(--bg-card); padding: 50px; border-radius: 20px; margin-top: 60px; border: 1px solid var(--primary-color);">
                <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                    <h2>Why Partner with Us?</h2>
                    <ul style="text-align: left; margin: 30px auto; display: inline-block;">
                        <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Recurring commission on annual renewals.</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Full training and certification provided.</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Priority support for your clients.</li>
                        <li style="margin-bottom: 15px;"><i class="fas fa-check" style="color: var(--primary-color); margin-right: 10px;"></i> Exclusive access to early features.</li>
                    </ul>
                    <div style="margin-top: 30px;">
                        <a href="https://one.jaspa.co.za/signup" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});" class="btn btn-primary">Start Trial</a>
                    </div>
                </div>
            </div>
            
            <!-- Partial FAQ for Partners -->
            <div style="margin-top: 80px;">
                <div class="section-header">
                    <h2>Partner FAQ</h2>
                </div>
                <div class="faq-grid">
                    <div class="faq-item">
                        <h4>How do I get paid?</h4>
                        <p>Partners earn recurring commissions on annual renewals. Payments are made directly into your preferred account.</p>
                    </div>
                    <div class="faq-item">
                        <h4>Is training provided?</h4>
                        <p>Yes. We provide full training and certification for all our partners to ensure you can support your clients effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
