<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    $website_author = "Dhanvis UltraTek Inspection Services";
    $website_Description = "Dhanvis UltraTek serves multiple industries including Wind Energy, Oil & Gas, Power Generation, Manufacturing, and Heavy Engineering with professional NDT services.";
    $website_keywords = "wind energy inspection, oil gas NDT, power generation testing, manufacturing inspection, heavy engineering NDT";
    $favicon = "vl_img/fav32.png";
    ?>
    
    <!-- SEO Meta Tags -->
    <title>Industries We Serve - <?=$Config_business_Name;?></title>
    <meta name="description" content="<?=$website_Description;?>">
    <meta name="keywords" content="<?=$website_keywords;?>">
    <meta name="author" content="<?=$website_author;?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Industries We Serve - <?=$Config_business_Name;?>">
    <meta property="og:description" content="<?=$website_Description;?>">
    <meta property="og:type" content="website">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=$favicon;?>">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <!-- Desktop Header -->
    <?php include 'includes/header-new.php';?>
    
    <!-- Mobile Header -->
    <?php include 'includes/mobile-header-new.php';?>
    
    <!-- Page Banner -->
    <section class="dv-page-banner">
        <video class="dv-page-banner__video" autoplay muted loop playsinline>
            <source src="vl_img/windmill-park.mov" type="video/mp4">
        </video>
        <div class="dv-page-banner__overlay"></div>
        <div class="dv-container">
            <div class="dv-page-banner__content">
                <h1>Industries We Serve</h1>
                <nav class="dv-breadcrumb">
                    <a href="./">Home</a>
                    <span>/</span>
                    <span>Industries We Serve</span>
                </nav>
            </div>
        </div>
    </section>
    
    <!-- Industries Section -->
    <section class="dv-industries-page">
        <div class="dv-container">
            <div class="dv-services-header">
                <span class="dv-section-badge">Our Expertise</span>
                <h2>Serving Multiple Industries</h2>
                <p>We provide specialized NDT and inspection services across diverse industrial sectors, ensuring safety, quality, and compliance with international standards.</p>
            </div>
            
            <div class="dv-industries-page-grid dv-industries-page-grid--three">
                <!-- Wind Energy -->
                <div class="dv-industry-card dv-industry-card--highlight">
                    <div class="dv-industry-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="32" cy="32" r="6"/>
                            <path d="M32 26V4"/>
                            <path d="M26 32H4"/>
                            <path d="M38 32h22"/>
                            <path d="M32 38v22"/>
                            <path d="M32 26c-8-10-4-20 4-22"/>
                            <path d="M26 32c-10 8-20 4-22-4"/>
                            <path d="M38 32c10-8 20-4 22 4"/>
                        </svg>
                    </div>
                    <div class="dv-industry-card__content">
                        <h3>Wind Energy</h3>
                        <p>Comprehensive wind turbine blade inspection, structural assessment, and predictive maintenance services to maximize turbine efficiency and lifespan.</p>
                    </div>
                </div>
                
                <!-- Oil & Gas -->
                <div class="dv-industry-card dv-industry-card--highlight">
                    <div class="dv-industry-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="24" y="8" width="16" height="48" rx="2"/>
                            <path d="M20 20h24"/>
                            <path d="M20 36h24"/>
                            <path d="M32 8V2"/>
                            <circle cx="32" cy="28" r="4"/>
                        </svg>
                    </div>
                    <div class="dv-industry-card__content">
                        <h3>Oil & Gas</h3>
                        <p>Pipeline inspection, pressure vessel testing, and corrosion assessment for upstream, midstream, and downstream oil and gas operations.</p>
                    </div>
                </div>
                
                <!-- Welding -->
                <div class="dv-industry-card dv-industry-card--highlight">
                    <div class="dv-industry-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M32 8v20"/>
                            <path d="M24 28h16"/>
                            <circle cx="32" cy="44" r="12"/>
                            <path d="M26 44h12"/>
                            <path d="M32 38v12"/>
                            <path d="M20 16l-8 8"/>
                            <path d="M44 16l8 8"/>
                        </svg>
                    </div>
                    <div class="dv-industry-card__content">
                        <h3>Welding</h3>
                        <p>Quality assurance and weld inspection services ensuring structural integrity, code compliance, and certification for all welding applications.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="dv-cta-section">
        <div class="dv-container">
            <div class="dv-cta-content">
                <h2>Looking for Industry-Specific Solutions?</h2>
                <p>Our team of experts can help you with tailored inspection services for your industry.</p>
                <a href="contact.php" class="dv-btn dv-btn--white">Contact Us Today</a>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include 'includes/footer-new.php';?>
    
    <!-- Scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/animations.js"></script>
    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('dvHeader');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.dv-mobile-menu-btn');
        const mobileNav = document.querySelector('.dv-mobile-nav');
        if (mobileMenuBtn && mobileNav) {
            mobileMenuBtn.addEventListener('click', function() {
                mobileNav.classList.toggle('active');
                this.classList.toggle('active');
            });
        }
    </script>
</body>
</html>
