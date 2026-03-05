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
    <title>Home - <?=$Config_business_Name;?></title>
    <meta name="description" content="<?=$website_Description;?>">
    <meta name="keywords" content="<?=$website_keywords;?>">
    <meta name="author" content="<?=$website_author;?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="<?=$Config_business_Name;?>">
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
    
    <!-- Hero Section -->
    <section class="dv-hero">
        <video class="dv-hero__video" autoplay muted loop playsinline>
            <source src="vl_img/windmill-park.mov" type="video/mp4">
        </video>
       
        <div class="dv-container">
            <div class="dv-hero__content">
                <span class="dv-hero__badge">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
                        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                    </svg>
                    Trusted NDT Specialists
                </span>
                <h1 class="dv-hero__title">
                    Precision in Wind.<br>
                    <span>Power in Trust.</span>
                </h1>
                <p class="dv-hero__desc">
                    Dhanvis UltraTek Inspection Services delivers reliable, accurate, and technology-driven inspection solutions across industries. With certified professionals and advanced technologies, we ensure safety, performance, and asset reliability.
                </p>
                <div class="dv-hero__actions">
                    <a href="services" class="dv-btn dv-btn--primary">Our Services</a>
                    <a href="about" class="dv-btn dv-btn--secondary">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Bar -->
    <section class="dv-features">
        <div class="dv-container">
            <div class="dv-features__grid">
                <div class="dv-features__item">
                    <div class="dv-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <ellipse cx="32" cy="32" rx="26" ry="10" transform="rotate(-30 32 32)"/>
                            <ellipse cx="32" cy="32" rx="26" ry="10" transform="rotate(30 32 32)"/>
                            <ellipse cx="32" cy="32" rx="26" ry="10" transform="rotate(90 32 32)"/>
                            <circle cx="32" cy="32" r="5" fill="white"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Advanced NDT<br>Techniques</h4>
                </div>
                <div class="dv-features__item">
                    <div class="dv-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <path d="M32 8L40 24H56L44 36L48 52L32 44L16 52L20 36L8 24H24L32 8Z"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Wind Blade Inspection<br>Specialists</h4>
                </div>
                <div class="dv-features__item">
                    <div class="dv-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <rect x="12" y="8" width="40" height="48" rx="2"/>
                            <rect x="20" y="16" width="24" height="18" rx="1"/>
                            <line x1="20" y1="42" x2="44" y2="42"/>
                            <line x1="20" y1="48" x2="38" y2="48"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Accurate Evaluation<br>& Reporting</h4>
                </div>
                <div class="dv-features__item">
                    <div class="dv-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <path d="M32 8L38 20H50L40 30L44 42L32 34L20 42L24 30L14 20H26L32 8Z"/>
                            <path d="M20 48H44"/>
                            <path d="M24 52H40"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Commitment to Safety<br>& Quality</h4>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Industries Section -->
    <section class="dv-industries dv-section--dark">
        <div class="dv-container">
            <div class="dv-section-header">
                <span class="dv-section-header__badge">Our Expertise</span>
                <h2 class="dv-section-header__title">Industries We Serve</h2>
                <p class="dv-section-header__desc">
                    We provide specialized inspection services across multiple industries, ensuring the highest standards of quality and safety in every project we undertake.
                </p>
            </div>
            
            <div class="dv-industries__grid">
                <!-- Wind Energy -->
                <div class="dv-industry-card">
                    <div class="dv-industry-card__image">
                        <img src="vl_img/wind.jpg" alt="Wind Energy">
                    </div>
                    <div class="dv-industry-card__content">
                        <h3 class="dv-industry-card__title">Wind Energy</h3>
                        <p class="dv-industry-card__desc">
                            Comprehensive inspection services for wind turbine blades, towers, and components. Our specialized team ensures optimal performance and longevity of wind energy assets through advanced NDT techniques.
                        </p>
                        <div class="dv-industry-card__thumbs">
                            <div class="dv-industry-card__thumb">
                                <img src="vl_img/oil.jpg" alt="Wind Blade Inspection">
                            </div>
                            <div class="dv-industry-card__thumb">
                                <img src="vl_img/power.jpg" alt="Turbine Testing">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Oil & Gas | Construction -->
                <div class="dv-industries__double">
                    <div class="dv-industry-card dv-industry-card--small">
                        <h3 class="dv-industry-card__title">Oil & Gas</h3>
                        <p class="dv-industry-card__desc">
                            Expert inspection services for pipelines, pressure vessels, storage tanks, and offshore structures with strict adherence to industry standards.
                        </p>
                    </div>
                    <div class="dv-industry-card dv-industry-card--small">
                        <h3 class="dv-industry-card__title">Construction & Welding</h3>
                        <p class="dv-industry-card__desc">
                            Quality assurance and weld inspection services for construction projects, ensuring structural integrity and code compliance.
                        </p>
                    </div>
                </div>
                
                <!-- Power Generation -->
                <div class="dv-industry-card dv-industry-card--reverse">
                    <div class="dv-industry-card__image">
                        <img src="vl_img/power.jpg" alt="Power Generation">
                    </div>
                    <div class="dv-industry-card__content">
                        <h3 class="dv-industry-card__title">Power Generation</h3>
                        <p class="dv-industry-card__desc">
                            Reliable inspection solutions for power plants, turbines, generators, and critical infrastructure. We help maintain operational efficiency and prevent costly downtime.
                        </p>
                        <div class="dv-industry-card__thumbs">
                            <div class="dv-industry-card__thumb">
                                <img src="vl_img/manufacturing.jpg" alt="Power Plant Inspection">
                            </div>
                            <div class="dv-industry-card__thumb">
                                <img src="vl_img/heavy.jpg" alt="Generator Testing">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Manufacturing | Heavy Engineering -->
                <div class="dv-industries__double">
                    <div class="dv-industry-card dv-industry-card--small">
                        <h3 class="dv-industry-card__title">Manufacturing</h3>
                        <p class="dv-industry-card__desc">
                            In-process and final inspection services for manufacturing facilities, ensuring product quality and process optimization.
                        </p>
                    </div>
                    <div class="dv-industry-card dv-industry-card--small">
                        <h3 class="dv-industry-card__title">Heavy Engineering</h3>
                        <p class="dv-industry-card__desc">
                            Specialized NDT services for heavy engineering projects, including large fabrications, castings, and forgings.
                        </p>
                    </div>
                </div>
                
                <!-- Construction & Infrastructure -->
                <div class="dv-industry-card">
                    <div class="dv-industry-card__image">
                        <img src="vl_img/construction.jpg" alt="Construction & Infrastructure">
                    </div>
                    <div class="dv-industry-card__content">
                        <h3 class="dv-industry-card__title">Construction & Infrastructure</h3>
                        <p class="dv-industry-card__desc">
                            Comprehensive inspection services for bridges, buildings, and infrastructure projects. We ensure structural integrity through advanced testing methodologies.
                        </p>
                        <div class="dv-industry-card__thumbs">
                            <div class="dv-industry-card__thumb">
                                <img src="vl_img/s3.jpg" alt="Bridge Inspection">
                            </div>
                            <div class="dv-industry-card__thumb">
                                <img src="vl_img/ndt.jpg" alt="Infrastructure Testing">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section class="dv-why-us">
        <div class="dv-container">
            <div class="dv-why-us__grid">
                <div class="dv-why-us__content">
                    <span class="dv-section-header__badge">Why Choose Us</span>
                    <h2 class="dv-why-us__title">Your Trusted Partner in Inspection Excellence</h2>
                    <p class="dv-why-us__desc">
                        We are committed to maintaining high standards of quality through continuous improvement, technical training, and compliance with international codes and industry best practices.
                    </p>
                    <ul class="dv-why-us__list">
                        <li>
                            <span class="dv-why-us__check">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <p>Certified & Experienced Inspection Professionals</p>
                        </li>
                        <li>
                            <span class="dv-why-us__check">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <p>Specialized Expertise in Wind Blade Inspection</p>
                        </li>
                        <li>
                            <span class="dv-why-us__check">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <p>Advanced Inspection Equipment & Technology</p>
                        </li>
                        <li>
                            <span class="dv-why-us__check">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <p>Accurate Data Evaluation & Comprehensive Reporting</p>
                        </li>
                        <li>
                            <span class="dv-why-us__check">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <p>Compliance with International Standards</p>
                        </li>
                        <li>
                            <span class="dv-why-us__check">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <p>Strong Commitment to Safety & Quality</p>
                        </li>
                        <li>
                            <span class="dv-why-us__check">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                            </span>
                            <p>Client-Focused & Transparent Approach</p>
                        </li>
                    </ul>
                    <div class="dv-why-us__badge">
                        <div class="dv-why-us__badge-icon">
                            <img src="svg/certificate.svg" alt="ISO Certified">
                        </div>
                        <div class="dv-why-us__badge-text">
                            <strong>ISO Certified Company</strong>
                            International quality standards compliance
                        </div>
                    </div>
                </div>
                <div class="dv-why-us__visual">
                    <div class="dv-why-us__image">
                        <img src="vl_img/about-400.jpg" alt="About Dhanvis UltraTek">
                    </div>
                    <div class="dv-why-us__image">
                        <img src="vl_img/wind.jpg" alt="Wind Energy Inspection">
                    </div>
                    <div class="dv-why-us__image">
                        <img src="vl_img/ndt.jpg" alt="NDT Services">
                    </div>
                    <div class="dv-why-us__stats">
                        <div class="dv-why-us__stat">
                            <div class="dv-why-us__stat-number">17+</div>
                            <div class="dv-why-us__stat-label">Years Experience</div>
                        </div>
                        <div class="dv-why-us__stat">
                            <div class="dv-why-us__stat-number">9.7</div>
                            <div class="dv-why-us__stat-label">Customer Rating</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Stats Section -->
    <section class="dv-stats">
        <div class="dv-container">
            <div class="dv-stats__grid">
                <div class="dv-stats__item">
                    <div class="dv-stats__number" data-count="2000">2k<span>+</span></div>
                    <div class="dv-stats__label">Projects Completed</div>
                </div>
                <div class="dv-stats__item">
                    <div class="dv-stats__number">9.5</div>
                    <div class="dv-stats__label">Industry Rating</div>
                </div>
                <div class="dv-stats__item">
                    <div class="dv-stats__number">85<span>+</span></div>
                    <div class="dv-stats__label">Company Awards</div>
                </div>
                <div class="dv-stats__item">
                    <div class="dv-stats__number">950<span>+</span></div>
                    <div class="dv-stats__label">Turbines Inspected</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include 'includes/footer-new.php';?>
    
    <!-- Scripts -->
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
        
        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        // Observe elements for animation
        document.querySelectorAll('.dv-features__item, .dv-industry-card, .dv-stats__item').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>
