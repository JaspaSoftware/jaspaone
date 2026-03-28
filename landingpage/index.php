<?php 
$pageTitle = "Jaspa One | All-in-One Business Management System";
$pageDescription = "Run your entire business on auto-pilot. CRM, Invoicing, Projects, HR, and more. Start your Free Entrepreneur Plan today.";
include 'includes/header.php'; 
?>

    <!-- Hero Section -->
    <section class="hero" style="background: linear-gradient(135deg, #fff 0%, #f4f7f9 100%);">
        <div class="container">
            <div class="row align-items-center" style="display: flex; flex-wrap: wrap; gap: 40px;">
                <div class="hero-content" style="flex: 1; min-width: 300px; text-align: left;">
                    <h1>The Unified Business OS <br><span style="color: var(--primary-color);">Built for the South African Hustle.</span></h1>
                    <p style="font-size: 1.25rem; color: var(--text-muted); margin-bottom: 35px;">We replace the frustration of 5 different apps with the precision of 1 unified engine. Run your CRM, Invoicing, Projects, and HR from a single, professional-grade platform.</p>
                    <div class="hero-buttons" style="justify-content: flex-start;">
                        <a href="contact.php" class="btn btn-primary" style="border-radius: 4px; padding: 15px 40px; font-size: 1rem;">TRY FOR FREE</a>
                        <p style="margin-top: 15px; font-size: 0.9rem; color: var(--text-muted);"><i class="fas fa-check-circle" style="color: #10b981;"></i> No credit card required. Instant access.</p>
                    </div>
                </div>
                <!-- Mockup placeholder -->
                <div class="hero-image" style="flex: 1; min-width: 300px; text-align: center;">
                    <img src="img/web-logo.png" alt="Jaspa One Interface" style="max-width: 80%; opacity: 0.8; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.1));">
                    <div style="background: white; padding: 20px; border-radius: 12px; box-shadow: var(--shadow-md); margin-top: -40px; position: relative; display: inline-block;">
                        <p style="margin: 0; font-weight: 600; color: var(--secondary-color);">"The precision your business deserves."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By / Logos bar -->
    <section style="padding: 40px 0; background: #fff; border-bottom: 1px solid #eee;">
        <div class="container" style="text-align: center;">
             <p style="text-transform: uppercase; font-size: 0.75rem; letter-spacing: 2px; color: var(--text-muted); margin-bottom: 20px;">Trusted by 150+ Growing South African SMMEs</p>
             <div style="display: flex; justify-content: center; gap: 50px; flex-wrap: wrap; opacity: 0.5; filter: grayscale(1);">
                <i class="fab fa-aws fa-3x"></i>
                <i class="fab fa-stripe fa-3x"></i>
                <i class="fab fa-paypal fa-3x"></i>
                <i class="fab fa-slack fa-3x"></i>
             </div>
        </div>
    </section>

    <!-- Tier Segments -->
    <section id="features" style="background: var(--bg-light);">
        <div class="container">
            <div class="section-header">
                <small style="color: var(--primary-color); font-weight: 600; text-transform: uppercase;">One Engine. Every Stage.</small>
                <h2 style="color: var(--secondary-color); margin-top: 10px;">Tailored for Your Growth</h2>
                <p>Zoho-like simplicity with South African precision.</p>
            </div>

            <div class="features-grid">
                <!-- Tier 1 -->
                <div class="feature-card">
                    <div style="background: #E8F5E9; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-user-tie" style="color: #2E7D32; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: var(--primary-color); font-size: 0.85rem; text-transform: uppercase; margin-bottom: 10px;">The Micro Tier</h5>
                    <h3>Professionalize the Hustle</h3>
                    <p>Move away from manual spreadsheets. Generate VAT-compliant invoices and manage clients in one secure place.</p>
                </div>

                <!-- Tier 2 -->
                <div class="feature-card">
                    <div style="background: #E3F2FD; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-users" style="color: #1565C0; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: var(--primary-color); font-size: 0.85rem; text-transform: uppercase; margin-bottom: 10px;">The Small Tier</h5>
                    <h3>Build a Scalable System</h3>
                    <p>Automated HR, Attendance tracking, and Project Management. Transition from "checking in" to systems-based growth.</p>
                </div>

                <!-- Tier 3 -->
                <div class="feature-card">
                    <div style="background: #FFF3E0; width: 50px; height: 50px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
                        <i class="fas fa-microchip" style="color: #EF6C00; font-size: 1.5rem;"></i>
                    </div>
                    <h5 style="color: var(--primary-color); font-size: 0.85rem; text-transform: uppercase; margin-bottom: 10px;">The Enterprise Tier</h5>
                    <h3>Total Digital Sovereignty</h3>
                    <p>Corporate-grade security, REST API access, and detailed audit logs. Your data, your engine, your rules.</p>
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