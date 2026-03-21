<?php 
$pageTitle = "Pricing | Jaspa One - Professional-Grade Business OS";
$pageDescription = "Transparent annual pricing for the South African Hustle. From solo founders to corporate enterprises, own your engine starting from R4,680/year.";
include 'includes/header.php'; 
?>

    <!-- Pricing Hero -->
    <section class="hero" style="height: auto; padding: 150px 0 80px;">
        <div class="container hero-content">
            <h1>Official 2026 Pricing</h1>
            <p>Professional-grade craft designed for South African growth. No monthly surprises, just pure performance.</p>
        </div>
    </section>

    <!-- Detailed Pricing Table -->
    <section id="pricing-details" style="padding-top: 50px;">
        <div class="container">
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
                            <td><a href="https://one.jaspa.co.za/signup" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});" class="btn btn-outline" style="padding: 8px 15px; font-size: 0.8rem;">Start Small</a></td>
                            <td class="highlight"><a href="https://one.jaspa.co.za/signup" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});" class="btn btn-primary" style="padding: 8px 15px; font-size: 0.8rem; background: white; color: var(--primary-color);">Start Trial</a></td>
                            <td><a href="https://one.jaspa.co.za/signup" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});" class="btn btn-outline" style="padding: 8px 15px; font-size: 0.8rem;">Contact Sales</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Comparison Section -->
    <section id="comparison" style="background-color: var(--bg-card);">
        <div class="container">
            <div class="section-header">
                <h2>Why Jaspa One is Different</h2>
                <p>See how our annual sovereignty compares to traditional monthly fragmentation.</p>
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

    <!-- Add-ons Section -->
    <section id="addons" style="padding: 100px 0; background-color: var(--bg-dark); border-top: 1px solid rgba(255, 255, 255, 0.05);">
        <div class="container">
            <div class="section-header">
                <small>Expand Your Engine</small>
                <h2>Premium Add-ons</h2>
                <p>Customize your "Unified Business OS" with these specialized extensions. Each add-on is billed at <strong>R 760 / Year</strong>.</p>
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
                        <h4 style="font-size: 1.1rem; margin-bottom: 3px;"><?php echo $addon['name']; ?></h4>
                        <p class="small" style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px;"><?php echo $addon['desc']; ?></p>
                        <span style="font-size: 0.8rem; font-weight: 600; color: var(--accent-color);">R 760 / Year</span>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div style="text-align: center; margin-top: 50px;">
                <p class="small italic text-muted">*Add-ons are billed annually in addition to your base tier subscription.</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" style="padding: 100px 0; background-color: var(--bg-card);">
        <div class="container">
            <div class="section-header">
                <h2>Pricing FAQ</h2>
                <p>Common questions about Jaspa One pricing and subscriptions.</p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h4>What is Jaspa One?</h4>
                    <p>Jaspa One is the **Unified Business OS** designed for the South African hustle. It replaces 5+ fragmented apps with one professional-grade engine.</p>
                </div>
                <div class="faq-item">
                    <h4>Do you charge per user?</h4>
                    <p>No! Our tiers are based on business stages (Solo, Team, Enterprise). We don't penalize you for hiring more staff within your tier limits.</p>
                </div>
                <div class="faq-item">
                    <h4>Are prices annual?</h4>
                    <p>Yes. All prices listed for Jaspa One tiers and add-ons are billed **annually** to ensure Total Digital Sovereignty with no monthly surprises.</p>
                </div>
                <div class="faq-item">
                    <h4>Can I add more modules later?</h4>
                    <p>Absolutely. You can add premium modules to your engine at any time for **R 760 per year** per add-on.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="text-align: center; padding: 100px 0;">
        <div class="container">
            <h2>Ready for Your Digital Rebirth?</h2>
            <p style="margin-bottom: 30px;">Choose the tier that matches your current orbit and scale without friction.</p>
            <a href="https://one.jaspa.co.za/signup" onclick="gtag('event', 'conversion', {'send_to': 'AW-CONVERSION_ID/LABEL'});" class="btn btn-primary">Start Trial</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
