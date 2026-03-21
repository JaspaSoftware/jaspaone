<?php 
$pageTitle = "Jaspa One | All-in-One Business Management System";
$pageDescription = "Run your entire business on auto-pilot. CRM, Invoicing, Projects, HR, and more. Start your Free Entrepreneur Plan today.";
include 'includes/header.php'; 
?>

    <!-- Hero Section -->
    <section class="hero" style="min-height: 90vh; display: flex; align-items: center; position: relative;">
        <div class="container hero-content">
            <h1>Jaspa One: The Unified <br>Business OS</h1>
            <p>We replace the frustration of 5 different apps with the precision of 1 unified engine. Whether you are a solo founder or a corporate director, Jaspa One is the professional-grade craft your business deserves.</p>
            <div class="hero-buttons">
                <a href="https://one.jaspa.co.za/signup" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});" class="btn btn-primary" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});">Start Trial</a>
            </div>
        </div>
        <!-- Scroll Indicator -->
        <div style="position: absolute; bottom: 30px; left: 50%; transform: translateX(-50%); animation: bounce 2s infinite; color: rgba(255,255,255,0.5);">
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <style>
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
        40% {transform: translateY(-10px) translateX(-50%);}
        60% {transform: translateY(-5px) translateX(-50%);}
    }
    </style>

    <!-- High-Level Features (Tier Segments) -->
    <section id="features" style="padding-bottom: 0;">
        <div class="container">
            <div class="section-header">
                <small>Tailored for the South African Hustle</small>
                <h2>Every Stage. One Engine.</h2>
                <p>From solo founders to corporate enterprises, Jaspa One scales with you.</p>
            </div>

            <!-- Tier 1 -->
            <div class="features-grid">
                <div class="feature-card reveal active">
                    <i class="fas fa-user feature-icon text-success" style="color: #10b981;"></i>
                    <h5 class="small text-success">1. THE MICRO TIER (Solo)</h5>
                    <h3>Professionalize the Hustle</h3>
                    <p><strong>Financial Professionalism:</strong> Generate VAT-compliant PDF invoices instantly. Build trust and move away from manual spreadsheets.</p>
                </div>
                <div class="feature-card reveal active">
                    <i class="fas fa-users feature-icon text-info" style="color: #38bdf8;"></i>
                    <h5 class="small text-info">2. THE SMALL TIER (Team)</h5>
                    <h3>Build a Scalable System</h3>
                    <p><strong>Automated HR & Attendance:</strong> Transition to automated management. Track staff attendance and performance without the paperwork.</p>
                </div>
                <div class="feature-card reveal active">
                    <i class="fas fa-building feature-icon"></i>
                    <h5 class="small">3. THE ENTERPRISE TIER</h5>
                    <h3>Total Digital Sovereignty</h3>
                    <p><strong>Corporate-Grade Security:</strong> Protect your data with advanced modules, REST API access, and detailed audit logs.</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px;">
                <a href="features.php" class="btn btn-outline">Explore All Modules & Add-ons</a>
            </div>
        </div>
    </section>

    <!-- Pricing Preview -->
    <section id="price-preview" style="padding: 100px 0; background-color: var(--bg-card);">
        <div class="container">
            <div class="section-header">
                <h2>Jaspa One: 2026 Pricing</h2>
                <p>Simple, transparent annual sovereignty. No monthly surprises.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" style="text-align: center; border: 1px solid var(--primary-color);">
                    <h3>The Solo</h3>
                    <div class="price">R 4,680<span> / Year</span></div>
                    <p class="small">Ideal for freelancers & solo founders.</p>
                    <a href="pricing.php" class="btn btn-primary" style="margin-top: 20px;">View Full Details</a>
                </div>
                <div class="feature-card" style="text-align: center; border: 1px solid var(--accent-color);">
                    <h3>The Team</h3>
                    <div class="price">R 9,000<span> / Year</span></div>
                    <p class="small">Scale your SMME with up to 10 staff.</p>
                    <a href="pricing.php" class="btn btn-primary" style="margin-top: 20px;">View Full Details</a>
                </div>
                <div class="feature-card" style="text-align: center;">
                    <h3>Enterprise</h3>
                    <div class="price">Custom</div>
                    <p class="small">Bespoke solutions for large entities.</p>
                    <a href="pricing.php" class="btn btn-outline" style="margin-top: 20px;">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition / Why Choose -->
    <section id="benefits" class="value-prop">
        <div class="container">
            <div class="section-header">
                <h2>The Jaspa One Precision</h2>
                <p>"We replace the frustration of 5 different apps with the precision of 1 unified engine."</p>
            </div>

            <div class="features-grid" style="margin-top: 60px;">
                <!-- Benefit 1 -->
                <div class="feature-card">
                    <i class="fas fa-rocket feature-icon"></i>
                    <h3>Digital Rebirth</h3>
                    <p>Move your business from chaos to clarity. Automate repetitive tasks and focus on the craft of growth.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="feature-card">
                    <i class="fas fa-hand-holding-usd feature-icon"></i>
                    <h3>Cashflow Sovereignty</h3>
                    <p>Annual pricing models built for the South African SMME. Know your costs and own your engine.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="feature-card">
                    <i class="fas fa-shield-alt feature-icon"></i>
                    <h3>Institutional Knowledge</h3>
                    <p>Build a "Company Wiki" that lives within your OS. Ensure your processes are documented as you scale.</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 50px;">
                <a href="https://one.jaspa.co.za/signup" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});" class="btn btn-primary">Start Trial</a>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section id="comparison" style="background-color: var(--bg-card);">
        <div class="container">
            <div class="section-header">
                <h2>Why Jaspa One is Different</h2>
                <p>See how we stack up against traditional business management methods.</p>
            </div>
            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th class="highlight">Jaspa One</th>
                            <th>Traditional / Others</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cost Model</td>
                            <td class="highlight"><strong>Annual Sovereignty</strong></td>
                            <td>Monthly Subscriptions (Death by 1000 cuts)</td>
                        </tr>
                        <tr>
                            <td>Tools Included</td>
                            <td class="highlight">All-in-One (CRM, HR, Projects, etc.)</td>
                            <td>Fragmented (Separate apps)</td>
                        </tr>
                        <tr>
                            <td>User Limit</td>
                            <td class="highlight">Unlimited Growth</td>
                            <td>Per User Fee</td>
                        </tr>
                        <tr>
                            <td>Setup Time</td>
                            <td class="highlight">Instant Access</td>
                            <td>Weeks/Months</td>
                        </tr>
                         <tr>
                            <td>Support</td>
                            <td class="highlight">Premium Included</td>
                            <td>Extra Cost</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Brief Partners Section -->
    <section id="partners-summary" style="background-color: var(--bg-card); padding: 80px 0;">
        <div class="container" style="text-align: center;">
            <div class="section-header">
                <h2>Grow With Us</h2>
                <p>Join our Reseller Program or become a Certified Consultant.</p>
            </div>
            <a href="partners.php" class="btn btn-outline">Explore Partner Programs</a>
        </div>
    </section>

    <!-- Testimonials Section - HIDDEN FOR NOW
    <section id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Our Users Say</h2>
                <p>Trusted by growing businesses across the country.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card testimonial-card">
                    <p class="quote">"Jaspa One changed how we run our agency. We used to have 5 different subscriptions. Now it's all in one place and we save thousands every year."</p>
                    <div class="author">
                        <strong>Sarah M.</strong>
                        <span>Marketing Director</span>
                    </div>
                </div>
                <div class="feature-card testimonial-card">
                    <p class="quote">"The project management tools are incredible. I can track my team's time, manage tasks, and invoice clients without switching windows."</p>
                    <div class="author">
                        <strong>David K.</strong>
                        <span>Construction SME</span>
                    </div>
                </div>
                <div class="feature-card testimonial-card">
                    <p class="quote">"Finally, software that doesn't charge per user! As we hired more staff, our costs stayed the same. Highly recommended for startups."</p>
                    <div class="author">
                        <strong>Thabo N.</strong>
                        <span>Tech Founder</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    
    <!-- Brief Blog Section - HIDDEN FOR NOW
    <section id="insights-summary" style="padding: 80px 0;">
        <div class="container" style="text-align: center;">
            <div class="section-header">
                <h2>Latest Insights</h2>
                <p>Tips and strategies for running a better business.</p>
            </div>
            <a href="blog.php" class="btn btn-outline">Read Our Blog</a>
        </div>
    </section>
    -->

    <!-- Home FAQ Section -->
    <section id="faq" style="padding: 100px 0; background-color: var(--bg-card);">
        <div class="container">
            <div class="section-header">
                <h2>Have Questions?</h2>
                <p>Everything you need to know about starting your digital rebirth.</p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h4>What is Jaspa One?</h4>
                    <p>Jaspa One is the **Unified Business OS** that replaces fragmented apps with one professional-grade engine covering CRM, Invoicing, and HR.</p>
                </div>
                <div class="faq-item">
                    <h4>How long is the trial?</h4>
                    <p>You can start your trial today and explore the full power of the engine. For a personalized consultation, our architects are available on WhatsApp.</p>
                </div>
                <div class="faq-item">
                    <h4>Do you charge per user?</h4>
                    <p>No! Our tiers are built for business stages (Solo, Team, Enterprise) with unlimited growth potential within your tier.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="pricing.php#faq" class="btn btn-outline">View More FAQs</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>