<?php 
$pageTitle = "Jaspa One | All-in-One Business Management System";
$pageDescription = "Run your entire business on auto-pilot. CRM, Invoicing, Projects, HR, and more. Start your Free Entrepreneur Plan today.";
include 'includes/header.php'; 
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Jaspa One: The Unified <br>Business OS</h1>
            <p>We replace the frustration of 5 different apps with the precision of 1 unified engine. Whether you are a solo founder or a corporate director, Jaspa One is the professional-grade craft your business deserves.</p>
            <div class="hero-buttons">
                <a href="contact.php" class="btn btn-primary">Start Your Digital Rebirth</a>
            </div>
        </div>
    </section>

    <!-- Tier Segments -->
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
        </div>
    </section>

    <!-- Price Section -->
    <section id="price" style="padding: 100px 0;">
        <div class="container">
            <div class="section-header">
                <h2>Jaspa One: Official 2026 Pricing</h2>
                <p>Professional-grade craft designed for South African growth.</p>
            </div>
            
            <div class="pricing-comparison-table-wrapper">
                <table class="pricing-comparison-table">
                    <thead>
                        <tr>
                            <th>Feature Set</th>
                            <th>
                                <span class="plan-name">The Solo</span>
                                <span class="plan-price" style="color: #10b981;">R 4,680</span>
                                <span class="plan-subtitle">1-Man Show / Freelancer</span>
                            </th>
                            <th class="highlight">
                                <span class="plan-name">The Team</span>
                                <span class="plan-price" style="color: white;">R 9,000</span>
                                <span class="plan-subtitle">Growing SMME (2–10 Staff)</span>
                            </th>
                            <th>
                                <span class="plan-name">The Enterprise</span>
                                <span class="plan-price">Custom</span>
                                <span class="plan-subtitle">Large Entities / Groups</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Core Modules</td>
                            <td>Leads, Invoices, Expenses, Clients</td>
                            <td class="highlight">Everything in Solo PLUS HR, Attendance, Projects</td>
                            <td>Everything in Team PLUS Assets, API, Webhooks</td>
                        </tr>
                        <tr>
                            <td>Target Size</td>
                            <td>1–3 People</td>
                            <td class="highlight">4–15 People</td>
                            <td>16+ People</td>
                        </tr>
                        <tr>
                            <td>Support SLA</td>
                            <td>Standard (Email/WA)</td>
                            <td class="highlight">Priority (Tickets)</td>
                            <td>Dedicated Architect SLA</td>
                        </tr>
                        <tr>
                            <td>Branding Tools</td>
                            <td>Standard</td>
                            <td class="highlight">Advanced</td>
                            <td>Personalized Bio-Links & QR</td>
                        </tr>
                        <tr>
                            <td>Cyber Security</td>
                            <td>Basic</td>
                            <td class="highlight">Standard</td>
                            <td>Corporate-Grade + Audit Logs</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="contact.php" class="btn btn-outline" style="padding: 8px 15px; font-size: 0.8rem;">Start Small</a></td>
                            <td class="highlight"><a href="contact.php" class="btn btn-primary" style="padding: 8px 15px; font-size: 0.8rem; background: white; color: var(--primary-color);">Scale Now</a></td>
                            <td><a href="contact.php" class="btn btn-outline" style="padding: 8px 15px; font-size: 0.8rem;">Contact Sales</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Add-ons Grid -->
    <section id="addons" class="bg-gray" style="background-color: var(--bg-card); padding: 100px 0;">
        <div class="container">
            <div class="section-header">
                <small>Expand Your Engine</small>
                <h2>Premium Add-ons</h2>
                <p>Customize your "Unified Business OS" with these specialized extensions.</p>
            </div>

            <div class="features-grid">
                <?php
                $addons = [
                    ['icon' => 'fa-plug', 'name' => 'REST API', 'desc' => 'Connect Jaspa One with mobile apps or third-party systems.'],
                    ['icon' => 'fa-money-check-alt', 'name' => 'Payroll', 'desc' => 'Manage salaries, components, and professional payslips.'],
                    ['icon' => 'fa-laptop-code', 'name' => 'Asset Management', 'desc' => 'Track company hardware, software, and lending history.'],
                    ['icon' => 'fa-video', 'name' => 'Zoom Meeting', 'desc' => 'Create and launch Zoom meetings directly inside the engine.'],
                    ['icon' => 'fa-user-plus', 'name' => 'Recruit', 'desc' => 'Streamline hiring with job postings and candidate tracking.'],
                    ['icon' => 'fa-sms', 'name' => 'SMS Notification', 'desc' => 'Integrated gateways like Twilio or Vonage support.'],
                    ['icon' => 'fa-shield-alt', 'name' => 'Cyber Security', 'desc' => 'Login protection, brute-force blocking, and audit logs.'],
                    ['icon' => 'fa-qrcode', 'name' => 'QR Code & Bio Links', 'desc' => 'Professional branding with automated QR generation.'],
                ];

                foreach($addons as $addon): ?>
                    <div class="feature-card" style="padding: 25px; text-align: left;">
                        <i class="fas <?php echo $addon['icon']; ?> text-primary" style="font-size: 1.5rem; margin-bottom: 15px;"></i>
                        <h4 style="font-size: 1.1rem; margin-bottom: 5px;"><?php echo $addon['name']; ?></h4>
                        <p class="small" style="font-size: 0.85rem; color: var(--text-muted);"><?php echo $addon['desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div style="text-align: center; margin-top: 50px;">
                <p class="small italic text-muted">And 15+ more modules available in the Enterprise Tier.</p>
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
                <a href="contact.php" class="btn btn-primary">Start Your Digital Rebirth</a>
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
                            <td class="highlight"><strong>R855/yr (SMME Plan)</strong></td>
                            <td>Monthly Subscriptions (R5000+/yr)</td>
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

    <!-- Testimonials Section -->
    <section id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Our Users Say</h2>
                <p>Trusted by growing businesses across the country.</p>
            </div>
            <div class="features-grid">
                <!-- Testimonial 1 -->
                <div class="feature-card testimonial-card">
                    <p class="quote">"Jaspa One changed how we run our agency. We used to have 5 different subscriptions. Now it's all in one place and we save thousands every year."</p>
                    <div class="author">
                        <strong>Sarah M.</strong>
                        <span>Marketing Director</span>
                    </div>
                </div>
                 <!-- Testimonial 2 -->
                <div class="feature-card testimonial-card">
                    <p class="quote">"The project management tools are incredible. I can track my team's time, manage tasks, and invoice clients without switching windows."</p>
                    <div class="author">
                        <strong>David K.</strong>
                        <span>Construction SME</span>
                    </div>
                </div>
                 <!-- Testimonial 3 -->
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
    
    <!-- Brief Blog Section -->
    <section id="insights-summary" style="padding: 80px 0;">
        <div class="container" style="text-align: center;">
            <div class="section-header">
                <h2>Latest Insights</h2>
                <p>Tips and strategies for running a better business.</p>
            </div>
            <a href="blog.php" class="btn btn-outline">Read Our Blog</a>
        </div>
    </section>



<?php include 'includes/footer.php'; ?>