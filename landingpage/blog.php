<?php 
$pageTitle = "Business Insights & Blog | Jaspa One";
$pageDescription = "Expert advice on scaling your business, managing cash flow, and automating admin tasks. Read our latest insights for South African entrepreneurs.";
include 'includes/header.php'; 
?>

<section class="hero" style="min-height: 50vh; height: auto; padding-top: 120px; padding-bottom: 60px;">
    <div class="container hero-content">
        <h1>Business Insights</h1>
        <p>Practical advice on automation, cash flow, and scaling your SMME.</p>
    </div>
</section>

<section id="blog-content" style="padding: 80px 0;">
    <div class="container">
        <div class="features-grid">
            <!-- Article 1 -->
            <article class="feature-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div style="height: 200px; background: linear-gradient(45deg, #1e293b, #0f172a); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-chart-line" style="font-size: 4rem; color: var(--primary-color); opacity: 0.5;"></i>
                </div>
                <div style="padding: 30px; flex: 1; display: flex; flex-direction: column;">
                    <span style="color: var(--accent-color); font-size: 0.8rem; text-transform: uppercase; font-weight: 700; margin-bottom: 10px;">Growth Strategy</span>
                    <h3 style="font-size: 1.25rem; margin-bottom: 15px;">Why Monthly Subscriptions Are Killing Your Cash Flow</h3>
                    <p style="flex: 1; margin-bottom: 20px;">Discover how switching to annual models can free up capital for inventory and marketing when you need it most.</p>
                    <a href="#" style="color: var(--primary-color); font-weight: 600;">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="feature-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 200px; background: linear-gradient(45deg, #1e293b, #0f172a); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-cogs" style="font-size: 4rem; color: var(--primary-color); opacity: 0.5;"></i>
                </div>
                <div style="padding: 30px; flex: 1; display: flex; flex-direction: column;">
                    <span style="color: var(--accent-color); font-size: 0.8rem; text-transform: uppercase; font-weight: 700; margin-bottom: 10px;">Automation</span>
                    <h3 style="font-size: 1.25rem; margin-bottom: 15px;">5 Tasks You Should Automate Today</h3>
                    <p style="flex: 1; margin-bottom: 20px;">Stop manually sending invoices and follow-ups. Here are the top 5 admin tasks Jaspa One handles for you.</p>
                    <a href="#" style="color: var(--primary-color); font-weight: 600;">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="feature-card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                    <div style="height: 200px; background: linear-gradient(45deg, #1e293b, #0f172a); display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-users" style="font-size: 4rem; color: var(--primary-color); opacity: 0.5;"></i>
                </div>
                <div style="padding: 30px; flex: 1; display: flex; flex-direction: column;">
                    <span style="color: var(--accent-color); font-size: 0.8rem; text-transform: uppercase; font-weight: 700; margin-bottom: 10px;">Management</span>
                    <h3 style="font-size: 1.25rem; margin-bottom: 15px;">Scaling from 5 to 50 Employees</h3>
                    <p style="flex: 1; margin-bottom: 20px;">How to maintain culture and efficiency as your team grows without changing your software stack.</p>
                    <a href="#" style="color: var(--primary-color); font-weight: 600;">Read Article <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
