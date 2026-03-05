<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    $website_author = "Dhanvis UltraTek Inspection Services";
    $website_Description = "Contact Dhanvis UltraTek Inspection Services for professional NDT and inspection services. Get in touch with our expert team.";
    $website_keywords = "Contact Dhanvis UltraTek, NDT services contact, inspection services Tamil Nadu";
    $favicon = "vl_img/fav32.png";
    ?>
    
    <!-- SEO Meta Tags -->
    <title>Contact Us - <?=$Config_business_Name;?></title>
    <meta name="description" content="<?=$website_Description;?>">
    <meta name="keywords" content="<?=$website_keywords;?>">
    <meta name="author" content="<?=$website_author;?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph -->
    <meta property="og:title" content="Contact Us - <?=$Config_business_Name;?>">
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
                <h1>Contact Us</h1>
                <nav class="dv-breadcrumb">
                    <a href="./">Home</a>
                    <span>/</span>
                    <span>Contact Us</span>
                </nav>
            </div>
        </div>
    </section>
    
    <!-- Map Section -->
    <div class="dv-map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31345.9732445981!2d79.62006084906815!3d10.868834960451064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a55393bf439e077%3A0x61ebeb8ab4f85a28!2sSannanallur%2C%20Tamil%20Nadu%20609504!5e0!3m2!1sen!2sin!4v1769865394942!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <!-- Contact Section -->
    <section class="dv-contact-section">
        <div class="dv-container">
            <div class="dv-contact-grid">
                <!-- Contact Info -->
                <div class="dv-contact-info">
                    <h2>Get in Touch</h2>
                    <p>Have questions about our inspection services? Contact our team today and we'll be happy to help you with your NDT requirements.</p>
                    
                    <ul class="dv-contact-details">
                        <li>
                            <div class="dv-contact-details__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="dv-contact-details__content">
                                <h4>Our Office</h4>
                                <p>Door No. 5/2, Thiruvarur Rasta Street,<br>Sannanallur Post, Nannilam Taluk,<br>Thiruvarur District, Tamil Nadu – 609504, India</p>
                            </div>
                        </li>
                        <li>
                            <div class="dv-contact-details__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div class="dv-contact-details__content">
                                <h4>Phone Numbers</h4>
                                <p><a href="tel:<?=$Config_mobile_number;?>"><?=$Config_mobile_number;?></a><br>
                                <a href="tel:<?=$Config_mobile_number2;?>"><?=$Config_mobile_number2;?></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="dv-contact-details__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div class="dv-contact-details__content">
                                <h4>Email Address</h4>
                                <p><a href="mailto:<?=$Config_email_ID;?>"><?=$Config_email_ID;?></a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Contact Form -->
                <div class="dv-contact-form">
                    <h3>Send us a Message</h3>
                    <form action="#" method="post" autocomplete="off">
                        <div class="dv-form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="dv-form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="dv-form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="dv-form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="How can we help you?" required></textarea>
                        </div>
                        <button type="submit" class="dv-btn dv-btn--primary">Send Message</button>
                    </form>
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