<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Analytics (GA4) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-XXXXXXXXXX');
    </script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Jaspa One | Business Management System - Run Your Business on Auto-Pilot'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Jaspa One is the Unified Business OS for the South African Hustle. CRM, Invoicing, HR, and more in one premium engine. Start your digital rebirth today.'; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jaspaone.co.za/">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Jaspa One | The Unified Business OS'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Run your entire business with the precision of one unified engine. Built for the South African hustle.'; ?>">
    <meta property="og:image" content="https://jaspaone.co.za/img/web-logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://jaspaone.co.za/">
    <meta property="twitter:title" content="<?php echo isset($pageTitle) ? $pageTitle : 'Jaspa One | The Unified Business OS'; ?>">
    <meta property="twitter:description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Replace the frustration of 5 different apps with the precision of 1 unified engine.'; ?>">
    <meta property="twitter:image" content="https://jaspaone.co.za/img/web-logo.png">

    <!-- Schema.org Structured Data (JSON-LD) for AI Visibility -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "name": "Jaspa Technologies",
          "url": "https://www.jaspa.tec",
          "logo": "https://jaspaone.co.za/img/web-logo.png",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+27-78-343-7563",
            "contactType": "sales",
            "areaServed": "ZA",
            "availableLanguage": "en"
          }
        },
        {
          "@type": "SoftwareApplication",
          "name": "Jaspa One",
          "applicationCategory": "BusinessApplication",
          "operatingSystem": "Web, Android, iOS",
          "offers": {
            "@type": "Offer",
            "price": "4680.00",
            "priceCurrency": "ZAR",
            "description": "The Solo / Micro Annual Subscription"
          },
          "description": "The Unified Business OS replacing 5+ apps with one professional-grade engine.",
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "ratingCount": "150"
          }
        }
      ]
    }
    </script>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail&display=swap" rel="stylesheet">

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
                     <a href="index.php"><img src="img/web-logo.png" alt="Jaspa One Logo"></a>
                </div>
                <!-- Mobile Menu Details -->
                <div class="mobile-menu-btn" id="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="nav-links" id="nav-links">
                    <li><a href="index.php#features">FEATURES</a></li>
                    <li><a href="#solutions">SOLUTIONS</a></li>
                    <li><a href="index.php#price">PRICING</a></li>
                    <li><a href="partners.php">PARTNERS</a></li>
                    <li><a href="faq.php">RESOURCES</a></li>
                    <li><a href="https://one.jaspaone.app" style="margin-right: 15px; font-weight: 500; color: var(--text-color);">LOGIN</a></li>
                    <li><a href="contact.php" class="btn btn-primary" style="border-radius: 4px; padding: 10px 25px;">TRY FOR FREE</a></li>
                </ul>
            </nav>
        </div>
    </header>
