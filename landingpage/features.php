<?php 
$pageTitle = "Features | Jaspa One - Premium Business Modules";
$pageDescription = "Explore the modules that make Jaspa One the Unified Business OS. From CRM and Invoicing to HR and Cyber Security, explore our premium add-ons.";
include 'includes/header.php'; 
?>

    <!-- Features Hero -->
    <section class="hero" style="height: auto; padding: 150px 0 80px;">
        <div class="container hero-content">
            <h1>Engineered for Growth</h1>
            <p>Every module in Jaspa One is crafted with precision to replace fragmented apps with one unified engine.</p>
        </div>
    </section>

    <!-- Core Modules Recap -->
    <section id="core-features" style="padding-top: 50px;">
        <div class="container">
            <div class="section-header">
                <h2>The Core Engine</h2>
                <p>These modules form the foundation of your digital rebirth.</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-file-invoice feature-icon"></i>
                    <h3>Unified Invoicing</h3>
                    <p>Generate VAT-compliant professional PDF invoices in seconds. Auto-track payments and manage recurring billing.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-users-cog feature-icon"></i>
                    <h3>Client Management (CRM)</h3>
                    <p>A single source of truth for every client interaction. From leads to loyal partners, manage the entire lifecycle.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-tasks feature-icon"></i>
                    <h3>Project Ecosystem</h3>
                    <p>Track time, manage tasks, and link expenses directly to projects. Real-time visibility into your team's output.</p>
                </div>
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
                <p class="small italic text-muted">And 15+ more modules available in the Enterprise Tier. Contact us for custom module development.</p>
                <a href="contact.php" class="btn btn-primary" style="margin-top: 20px;">Request a Custom Demo</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
