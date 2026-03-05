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
        
        <div class="dv-container dv-hero__container">
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
                    <a href="services.php" class="dv-btn dv-btn--primary">Our Services</a>
                    <a href="about.php" class="dv-btn dv-btn--outline">Learn More</a>
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
                            <!-- Atom Icon -->
                            <circle cx="32" cy="32" r="4"/>
                            <ellipse cx="32" cy="32" rx="22" ry="8"/>
                            <ellipse cx="32" cy="32" rx="22" ry="8" transform="rotate(60 32 32)"/>
                            <ellipse cx="32" cy="32" rx="22" ry="8" transform="rotate(-60 32 32)"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Advanced NDT<br>Techniques</h4>
                </div>
                <div class="dv-features__item">
                    <div class="dv-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <!-- Crossed Tools Icon -->
                            <rect x="26" y="4" width="12" height="40" rx="2" transform="rotate(45 32 32)"/>
                            <rect x="26" y="4" width="12" height="40" rx="2" transform="rotate(-45 32 32)"/>
                            <line x1="20" y1="20" x2="24" y2="24"/>
                            <line x1="40" y1="20" x2="44" y2="24"/>
                            <circle cx="32" cy="32" r="3"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Wind Blade Inspection<br>Specialists</h4>
                </div>
                <div class="dv-features__item">
                    <div class="dv-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <!-- Document/Report Icon -->
                            <rect x="12" y="8" width="40" height="48" rx="2"/>
                            <rect x="8" y="4" width="8" height="8" rx="1"/>
                            <rect x="48" y="4" width="8" height="8" rx="1"/>
                            <rect x="8" y="52" width="8" height="8" rx="1"/>
                            <rect x="48" y="52" width="8" height="8" rx="1"/>
                            <line x1="20" y1="24" x2="44" y2="24"/>
                            <line x1="20" y1="30" x2="44" y2="30"/>
                            <line x1="20" y1="36" x2="44" y2="36"/>
                            <line x1="20" y1="42" x2="36" y2="42"/>
                            <line x1="24" y1="16" x2="40" y2="48" stroke-dasharray="2,2"/>
                            <line x1="40" y1="16" x2="24" y2="48" stroke-dasharray="2,2"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Accurate Evaluation<br>& Reporting</h4>
                </div>
                <div class="dv-features__item">
                    <div class="dv-features__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                            <!-- Crane Icon -->
                            <line x1="32" y1="8" x2="32" y2="56"/>
                            <line x1="20" y1="8" x2="44" y2="8"/>
                            <line x1="32" y1="8" x2="56" y2="20"/>
                            <line x1="56" y1="20" x2="56" y2="32"/>
                            <rect x="50" y="32" width="12" height="10" rx="1"/>
                            <line x1="32" y1="16" x2="48" y2="24"/>
                            <line x1="32" y1="24" x2="44" y2="28"/>
                            <line x1="26" y1="56" x2="38" y2="56"/>
                            <line x1="24" y1="8" x2="28" y2="16"/>
                            <line x1="36" y1="16" x2="40" y2="8"/>
                        </svg>
                    </div>
                    <h4 class="dv-features__title">Commitment to Safety<br>& Quality</h4>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Industries We Serve - Full Showcase -->
    <section class="dv-ind-mega">
        <div class="dv-ind-mega__header">
            <div class="dv-container">
                <span class="dv-ind-mega__badge">12+ Industries Served</span>
                <h2 class="dv-ind-mega__title">Industries We Serve</h2>
                <p class="dv-ind-mega__subtitle">NDT is essential across major industrial sectors. Any industry using metal, composites, or critical components relies on our expertise for safety and reliability.</p>
            </div>
        </div>

        <!-- Featured Row - Large Cards -->
        <div class="dv-ind-mega__featured">
            <div class="dv-container">
                <div class="dv-ind-mega__featured-grid">
                    <!-- Wind Energy - Hero Card -->
                    <div class="dv-ind-hero-card">
                        <div class="dv-ind-hero-card__bg">
                            <img src="vl_img/wind.jpg" alt="Wind Energy">
                        </div>
                        <div class="dv-ind-hero-card__overlay"></div>
                        <div class="dv-ind-hero-card__content">
                            <span class="dv-ind-hero-card__tag">Our Specialty</span>
                            <h3 class="dv-ind-hero-card__title">Wind Energy</h3>
                            <p class="dv-ind-hero-card__desc">Comprehensive blade inspection, tower assessment, and turbine component evaluation using cutting-edge NDT technology.</p>
                            <ul class="dv-ind-hero-card__list">
                                <li>Blade Surface & Internal Inspection</li>
                                <li>Leading/Trailing Edge Assessment</li>
                                <li>Tower & Foundation Analysis</li>
                            </ul>
                            <a href="blade-inspection-services.php" class="dv-ind-hero-card__btn">
                                Explore Wind Services
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Oil & Gas -->
                    <div class="dv-ind-hero-card dv-ind-hero-card--orange">
                        <div class="dv-ind-hero-card__bg">
                            <img src="vl_img/oil.jpg" alt="Oil & Gas">
                        </div>
                        <div class="dv-ind-hero-card__overlay"></div>
                        <div class="dv-ind-hero-card__content">
                            <span class="dv-ind-hero-card__num">01</span>
                            <h3 class="dv-ind-hero-card__title">Oil & Gas Industry</h3>
                            <p class="dv-ind-hero-card__desc">Inspection of pipelines, storage tanks, pressure vessels, and refineries with strict safety compliance.</p>
                            <a href="services.php" class="dv-ind-hero-card__link">Learn More →</a>
                        </div>
                    </div>

                    <!-- Power Generation -->
                    <div class="dv-ind-hero-card dv-ind-hero-card--purple">
                        <div class="dv-ind-hero-card__bg">
                            <img src="vl_img/power.jpg" alt="Power Generation">
                        </div>
                        <div class="dv-ind-hero-card__overlay"></div>
                        <div class="dv-ind-hero-card__content">
                            <span class="dv-ind-hero-card__num">02</span>
                            <h3 class="dv-ind-hero-card__title">Power Generation</h3>
                            <p class="dv-ind-hero-card__desc">Nuclear, thermal, hydro, and wind plants - turbine, boiler, and structural inspections.</p>
                            <a href="services.php" class="dv-ind-hero-card__link">Learn More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grid Section - Image Cards with Varying Sizes -->
        <div class="dv-ind-mega__grid-section">
            <div class="dv-container">
                <div class="dv-ind-masonry">
                    <!-- Row 1 -->
                    <div class="dv-ind-masonry__row">
                        <!-- Aerospace - Large -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--lg dv-ind-card--cyan">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?w=600&h=400&fit=crop" alt="Aerospace">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">03</span>
                                <h4 class="dv-ind-card__title">Aerospace</h4>
                                <p class="dv-ind-card__desc">Aircraft structures, engines & components</p>
                            </div>
                        </a>
                        
                        <!-- Automotive - Medium -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--md dv-ind-card--green">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?w=400&h=300&fit=crop" alt="Automotive">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">04</span>
                                <h4 class="dv-ind-card__title">Automotive</h4>
                                <p class="dv-ind-card__desc">Engine parts & welds</p>
                            </div>
                        </a>
                        
                        <!-- Manufacturing - Small -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--sm dv-ind-card--yellow">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?w=300&h=250&fit=crop" alt="Manufacturing">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">05</span>
                                <h4 class="dv-ind-card__title">Manufacturing</h4>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Row 2 -->
                    <div class="dv-ind-masonry__row">
                        <!-- Marine - Small -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--sm dv-ind-card--blue">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1569263979104-865ab7cd8d13?w=300&h=250&fit=crop" alt="Marine">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">06</span>
                                <h4 class="dv-ind-card__title">Marine</h4>
                            </div>
                        </a>
                        
                        <!-- Railways - Medium -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--md dv-ind-card--red">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1474487548417-781cb71495f3?w=400&h=300&fit=crop" alt="Railways">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">07</span>
                                <h4 class="dv-ind-card__title">Railways</h4>
                                <p class="dv-ind-card__desc">Rails, axles & wheels</p>
                            </div>
                        </a>
                        
                        <!-- Petrochemical - Large -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--lg dv-ind-card--orange">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1518709766631-a6a7f45921c3?w=600&h=400&fit=crop" alt="Petrochemical">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">08</span>
                                <h4 class="dv-ind-card__title">Petrochemical</h4>
                                <p class="dv-ind-card__desc">Reactors, heat exchangers & piping systems</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Row 3 -->
                    <div class="dv-ind-masonry__row">
                        <!-- Defense - Medium -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--md dv-ind-card--purple">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1553451166-232112bda6f6?w=400&h=300&fit=crop" alt="Defense">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">09</span>
                                <h4 class="dv-ind-card__title">Defense & Military</h4>
                                <p class="dv-ind-card__desc">Weapons & vehicles</p>
                            </div>
                        </a>
                        
                        <!-- Medical - Small -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--sm dv-ind-card--pink">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=300&h=250&fit=crop" alt="Medical">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">10</span>
                                <h4 class="dv-ind-card__title">Medical</h4>
                            </div>
                        </a>
                        
                        <!-- Mining - Large -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--lg dv-ind-card--brown">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1578328819058-b69f3a3b0f6b?w=600&h=400&fit=crop" alt="Mining">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">11</span>
                                <h4 class="dv-ind-card__title">Mining Industry</h4>
                                <p class="dv-ind-card__desc">Heavy equipment & structural inspection</p>
                            </div>
                        </a>
                        
                        <!-- Construction - Small -->
                        <a href="services.php" class="dv-ind-card dv-ind-card--sm dv-ind-card--teal">
                            <div class="dv-ind-card__bg">
                                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=300&h=250&fit=crop" alt="Construction">
                            </div>
                            <div class="dv-ind-card__overlay"></div>
                            <div class="dv-ind-card__content">
                                <span class="dv-ind-card__num">12</span>
                                <h4 class="dv-ind-card__title">Construction</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="dv-ind-mega__cta">
            <div class="dv-container">
                <div class="dv-ind-mega__cta-inner">
                    <div class="dv-ind-mega__cta-content">
                        <h3>Need Inspection Services?</h3>
                        <p>Our certified NDT professionals are ready to support your industry requirements</p>
                    </div>
                    <div class="dv-ind-mega__cta-actions">
                        <a href="industries-we-serve-dhanvis-ultratek.php" class="dv-btn dv-btn--primary">
                            View All Industries
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                        <a href="contact.php" class="dv-btn dv-btn--outline">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Trusted Partners Section -->
    <section class="dv-partners">
        <div class="dv-container">
            <div class="dv-partners__header">
                <span class="dv-partners__label">Trusted By Industry Leaders</span>
            </div>
            <div class="dv-partners__slider">
                <div class="dv-partners__track">
                    <div class="dv-partners__logo"><img src="img/clients/1.png" alt="Partner 1"></div>
                    <div class="dv-partners__logo"><img src="img/clients/2.png" alt="Partner 2"></div>
                    <div class="dv-partners__logo"><img src="img/clients/3.png" alt="Partner 3"></div>
                    <div class="dv-partners__logo"><img src="img/clients/4.png" alt="Partner 4"></div>
                    <div class="dv-partners__logo"><img src="img/clients/5.png" alt="Partner 5"></div>
                    <div class="dv-partners__logo"><img src="img/clients/6.png" alt="Partner 6"></div>
                    <!-- Duplicate for infinite scroll -->
                    <div class="dv-partners__logo"><img src="img/clients/1.png" alt="Partner 1"></div>
                    <div class="dv-partners__logo"><img src="img/clients/2.png" alt="Partner 2"></div>
                    <div class="dv-partners__logo"><img src="img/clients/3.png" alt="Partner 3"></div>
                    <div class="dv-partners__logo"><img src="img/clients/4.png" alt="Partner 4"></div>
                    <div class="dv-partners__logo"><img src="img/clients/5.png" alt="Partner 5"></div>
                    <div class="dv-partners__logo"><img src="img/clients/6.png" alt="Partner 6"></div>
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
                    <div class="dv-stats__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <div class="dv-stats__number" data-count="2000">2k<span>+</span></div>
                    <div class="dv-stats__label">Projects Completed</div>
                </div>
                <div class="dv-stats__item">
                    <div class="dv-stats__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <div class="dv-stats__number">9.5</div>
                    <div class="dv-stats__label">Industry Rating</div>
                </div>
                <div class="dv-stats__item">
                    <div class="dv-stats__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                    </div>
                    <div class="dv-stats__number">85<span>+</span></div>
                    <div class="dv-stats__label">Company Awards</div>
                </div>
                <div class="dv-stats__item">
                    <div class="dv-stats__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72l1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
                    </div>
                    <div class="dv-stats__number">950<span>+</span></div>
                    <div class="dv-stats__label">Turbines Inspected</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="dv-testimonials">
        <div class="dv-container">
            <div class="dv-testimonials__header">
                <span class="dv-section-header__badge">Testimonials</span>
                <h2 class="dv-testimonials__title">What Our Clients Say</h2>
                <p class="dv-testimonials__subtitle">Trusted by leading companies across industries</p>
            </div>
            <div class="dv-testimonials__grid">
                <div class="dv-testimonial">
                    <div class="dv-testimonial__stars">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <p class="dv-testimonial__text">"Exceptional quality in wind blade inspection. Their team demonstrated remarkable expertise and professionalism throughout our project."</p>
                    <div class="dv-testimonial__author">
                        <div class="dv-testimonial__avatar">RK</div>
                        <div class="dv-testimonial__info">
                            <strong>Rajesh Kumar</strong>
                            <span>Operations Director, Wind Energy Corp</span>
                        </div>
                    </div>
                </div>
                <div class="dv-testimonial dv-testimonial--featured">
                    <div class="dv-testimonial__quote">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <p class="dv-testimonial__text">"Dhanvis UltraTek has been our trusted partner for NDT services. Their attention to detail and comprehensive reporting has helped us maintain the highest safety standards."</p>
                    <div class="dv-testimonial__author">
                        <div class="dv-testimonial__avatar">SP</div>
                        <div class="dv-testimonial__info">
                            <strong>Suresh Patel</strong>
                            <span>Quality Manager, Industrial Solutions Ltd</span>
                        </div>
                    </div>
                </div>
                <div class="dv-testimonial">
                    <div class="dv-testimonial__stars">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
                    </div>
                    <p class="dv-testimonial__text">"Their PAUT testing services are outstanding. Fast turnaround, accurate results, and excellent customer service. Highly recommended!"</p>
                    <div class="dv-testimonial__author">
                        <div class="dv-testimonial__avatar">AM</div>
                        <div class="dv-testimonial__info">
                            <strong>Anita Menon</strong>
                            <span>Engineering Lead, Power Gen India</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Final CTA Section -->
    <section class="dv-final-cta">
        <div class="dv-final-cta__bg">
            <img src="vl_img/wind.jpg" alt="Wind Turbines">
        </div>
        <div class="dv-final-cta__overlay"></div>
        <div class="dv-container">
            <div class="dv-final-cta__content">
                <h2 class="dv-final-cta__title">Ready to Ensure Your Assets' Integrity?</h2>
                <p class="dv-final-cta__text">Partner with Dhanvis UltraTek for reliable, accurate, and industry-leading inspection services. Let's discuss your requirements.</p>
                <div class="dv-final-cta__actions">
                    <a href="contact.php" class="dv-btn dv-btn--white">
                        Get a Free Quote
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="tel:<?=$Config_mobile_number;?>" class="dv-btn dv-btn--outline-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        Call Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <?php include 'includes/footer-new.php';?>
    
    <!-- Scripts -->
    <script src="js/animations.js"></script>
</body>
</html>
