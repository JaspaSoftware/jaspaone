<?php 
$pageTitle = "Frequently Asked Questions | Jaspa One";
$pageDescription = "Get answers about Jaspa One pricing, features, security, and the free forever trial. Find out why we are the best choice for SMMEs.";
include 'includes/header.php'; 
?>
<!-- specific FAQ schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Is there really no monthly fee?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Yes! We believe in helping businesses manage cash flow. You pay one flat fee of R855 per year. No monthly debit orders."
    }
  }, {
    "@type": "Question",
    "name": "Can I cancel my trial?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Absolutely. The Free Forever trial has no time limit on basic features. You only upgrade when you want the full premium experience."
    }
  }, {
    "@type": "Question",
    "name": "Is my data secure?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We use bank-level encryption and secure servers to ensure your business data is always safe and backed up."
    }
  }]
}
</script>

<section class="hero" style="min-height: 50vh; height: auto; padding-top: 120px; padding-bottom: 60px;">
    <div class="container hero-content">
        <h1>Frequently Asked Questions</h1>
        <p>Everything you need to know about Jaspa One.</p>
    </div>
</section>

<section id="faq-content" style="padding: 80px 0;">
    <div class="container">
        <div class="faq-grid">
            <div class="faq-item">
                <h4>Is there really no monthly fee?</h4>
                <p>Yes! We believe in helping businesses manage cash flow. You pay one flat fee of R855 per year. No monthly debit orders.</p>
            </div>
            <div class="faq-item">
                <h4>Can I cancel my trial?</h4>
                <p>Absolutely. The Free Forever trial has no time limit on basic features. You only upgrade when you want the full premium experience.</p>
            </div>
                <div class="faq-item">
                <h4>Is my data secure?</h4>
                <p>We use bank-level encryption and secure servers to ensure your business data is always safe and backed up.</p>
            </div>
                <div class="faq-item">
                <h4>Do you offer support?</h4>
                <p>Yes, all users get access to our support team via email and the internal ticketing system.</p>
            </div>
            <div class="faq-item">
                <h4>Can I import my data?</h4>
                <p>Yes, we support data import from most common formats (CSV, Excel) to get you started quickly.</p>
            </div>
            <div class="faq-item">
                <h4>Is there a mobile app?</h4>
                <p>Jaspa One is a Progressive Web App (PWA), meaning it works perfectly on all mobile devices without needing a store download.</p>
            </div>
        </div>
        
        <div style="margin-top: 60px; text-align: center;">
            <p>Still have questions?</p>
            <a href="index.php#contact" class="btn btn-primary" style="margin-top: 20px;">Contact Support</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
