<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    $website_author = "Dhanvis UltraTek Inspection Services";
    $website_Description = "Dhanvis UltraTek Inspection Services is a trusted provider of professional inspection and Non-Destructive Testing (NDT) services with specialized expertise in wind turbine blade inspection, evaluation, and quality assessment.";
    $website_keywords = "Dhanvis UltraTek Inspection Services Tamilnadu, inspection, evaluation, wind energy, oil & gas, power generation, Manufacturing, Heavy Engineering, Construction & Infrastructure, Fabrication & Welding";
    $favicon = "vl_img/fav32.png";
    ?>
    
    <!-- SEO Meta Tags -->
    <title>About Us - <?=$Config_business_Name;?></title>
    <meta name="description" content="<?=$website_Description;?>">
    <meta name="keywords" content="<?=$website_keywords;?>">
    <meta name="author" content="<?=$website_author;?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="About Us - <?=$Config_business_Name;?>">
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
                <h1>About Us</h1>
                <nav class="dv-breadcrumb">
                    <a href="./">Home</a>
                    <span>/</span>
                    <span>About Us</span>
                </nav>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section class="dv-about-section">
        <div class="dv-container">
            <div class="dv-about-grid">
                <div class="dv-about-image">
                    <img src="vl_img/about.jpg" alt="About Dhanvis UltraTek Inspection Services">
                </div>
                <div class="dv-about-content">
                    <span class="dv-section-badge">Who We Are</span>
                    <h2>Excellence in Non-Destructive Testing</h2>
                    <p>Dhanvis UltraTek Inspection Services is a specialized provider of advanced Non-Destructive Testing (NDT) and technical inspection services committed to ensuring material integrity, weld quality, and structural reliability.</p>
                    <p>Our inspection approach is based on internationally recognized standards, advanced diagnostic techniques, and data-driven evaluation methods. We focus on early defect detection, precise characterization, and comprehensive reporting to support informed engineering decisions.</p>
                    <p>With qualified inspectors and modern equipment, we deliver dependable services that help clients meet safety regulations, quality benchmarks, and operational requirements across multiple industries.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Vision Mission Goals -->
    <section class="dv-vmg-section">
        <div class="dv-container">
            <div class="dv-vmg-grid">
                <div class="dv-vmg-card">
                    <div class="dv-vmg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <circle cx="12" cy="12" r="6"/>
                            <circle cx="12" cy="12" r="2"/>
                        </svg>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be a trusted global partner in advanced NDT and inspection services, delivering precision, safety, and reliability through cutting-edge technology and expert evaluation.</p>
                </div>
                <div class="dv-vmg-card">
                    <div class="dv-vmg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2 17 12 22 22 17"/>
                            <polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide high-quality, accurate, and timely inspection solutions using advanced NDT methods such as PAUT, UT, RT, and VT, ensuring structural integrity, compliance, and customer confidence across industries.</p>
                </div>
                <div class="dv-vmg-card">
                    <div class="dv-vmg-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20V10"/>
                            <path d="M18 20V4"/>
                            <path d="M6 20v-4"/>
                        </svg>
                    </div>
                    <h3>Our Goals</h3>
                    <ul>
                        <li>Deliver technically accurate and standards-compliant inspection services</li>
                        <li>Enhance defect detection using advanced ultrasonic technologies</li>
                        <li>Maintain zero-compromise on safety and quality</li>
                        <li>Build long-term client partnerships through trust and performance</li>
                    </ul>
                </div>
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