<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jaspa One | Worksuite - One-Stop Business Solution</title>
    <meta name="description" content="Manage your entire business with Jaspa One Worksuite. Invoicing, Projects, HR, Leads, and more. Annual fee for better cashflow management.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="img/favicon.png" type="image/png">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">
                    <img src="img/web-logo.png" alt="Jaspa One Logo">
                </div>
                <!-- Mobile Menu Details -->
                <div class="mobile-menu-btn" id="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#value">Value</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="/login" class="btn btn-primary">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Manage Your Business, <br>Not Just Your Invoices</h1>
            <p>Worksuite aspires to be your one-stop business solution to handle and automate tasks, saving you time for core business decisions.</p>
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary">Get Started</a>
                <a href="#features" class="btn btn-outline">Explore Features</a>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2>All-In-One Business Suite</h2>
                <p>Everything you need to run your SMME efficiently.</p>
            </div>
            
            <div class="features-grid">
                <!-- Card 1 -->
                <div class="feature-card">
                    <i class="fas fa-users feature-icon"></i>
                    <h3>Client & Lead Management</h3>
                    <p>Track leads, manage customers, and convert proposals to invoices seamlessly.</p>
                </div>
                
                <!-- Card 2 -->
                <div class="feature-card">
                    <i class="fas fa-project-diagram feature-icon"></i>
                    <h3>Project Tracking</h3>
                    <p>Comprehensive project management with Kanban boards, Gantt charts, and progress tracking.</p>
                </div>
                
                <!-- Card 3 -->
                <div class="feature-card">
                    <i class="fas fa-file-invoice-dollar feature-icon"></i>
                    <h3>Finance & Invoicing</h3>
                    <p>Create professional invoices, estimates, and convert directly to credit notes.</p>
                </div>

                <!-- Card 4 -->
                <div class="feature-card">
                    <i class="fas fa-user-clock feature-icon"></i>
                    <h3>HR & Attendance</h3>
                    <p>Manage employee attendance, leave tracking, and custom roles & permissions.</p>
                </div>

                <!-- Card 5 -->
                <div class="feature-card">
                    <i class="fas fa-comments feature-icon"></i>
                    <h3>Real-Time Chat</h3>
                    <p>Internal chat functionality with Slack, Pusher, and One Signal integrations.</p>
                </div>

                 <!-- Card 6 -->
                <div class="feature-card">
                    <i class="fas fa-file-signature feature-icon"></i>
                    <h3>E-Signatures</h3>
                    <p>Secure e-signature enabled client contracts to speed up agreements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Value Proposition / Pricing -->
    <section id="value" class="value-prop">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose Jaspa One?</h2>
                <p>We help you manage your cashflow better.</p>
            </div>
            
            <div class="pricing-card">
                <h3>Annual Peace of Mind</h3>
                <div class="price">Annual Fee <span>/ Once Off</span></div>
                <p>Most invoicing tools charge monthly, draining your cashflow before you get paid. We charge a single annual fee, giving you breathing room.</p>
                <ul style="text-align: left; margin: 30px 0; padding-left: 20px;">
                    <li style="margin-bottom: 10px"><i class="fas fa-check" style="color: var(--primary-color)"></i> No monthly debit orders</li>
                    <li style="margin-bottom: 10px"><i class="fas fa-check" style="color: var(--primary-color)"></i> Full features access</li>
                    <li style="margin-bottom: 10px"><i class="fas fa-check" style="color: var(--primary-color)"></i> Premium support included</li>
                </ul>
                <a href="#contact" class="btn btn-primary">Get Your Annual Plan</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3 class="logo">Jaspa One.</h3>
                    <p style="color: var(--text-muted)">The ultimate worksuite for growing businesses. Automate, manage, and scale.</p>
                </div>
                <div>
                    <h4>Product</h4>
                    <ul>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#value">Pricing</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i> support@jaspaone.com</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; <?php echo date("Y"); ?> Jaspa One. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Custom JS -->
    <script src="js/main.js"></script>
</body>
</html>
