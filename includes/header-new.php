<!-- Desktop Header -->
<header class="dv-header" id="dvHeader">
    <!-- Top Bar -->
    <div class="dv-header__topbar">
        <div class="dv-container">
            <div class="dv-header__topbar-inner">
                <div class="dv-header__contact">
                    <a href="tel:<?=$Config_mobile_number;?>" class="dv-header__contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span><?=$Config_mobile_number;?></span>
                    </a>
                    <a href="tel:<?=$Config_mobile_number2;?>" class="dv-header__contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <span><?=$Config_mobile_number2;?></span>
                    </a>
                    <a href="mailto:<?=$Config_email_ID;?>" class="dv-header__contact-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                        <span><?=$Config_email_ID;?></span>
                    </a>
                </div>
                <div class="dv-header__social">
                    <a href="<?=$Config_facebook;?>" target="_blank" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                    <a href="<?=$Config_twitter;?>" target="_blank" aria-label="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                        </svg>
                    </a>
                    <a href="<?=$Config_instagram;?>" target="_blank" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none" stroke="currentColor" stroke-width="2"/>
                            <circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="2"/>
                            <circle cx="18" cy="6" r="1.5"/>
                        </svg>
                    </a>
                    <a href="<?=$Config_linkedin;?>" target="_blank" aria-label="LinkedIn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                            <rect x="2" y="9" width="4" height="12"/>
                            <circle cx="4" cy="4" r="2"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="dv-header__main">
        <div class="dv-container">
            <div class="dv-header__main-inner">
                <a href="./" class="dv-header__logo">
                    <img src="vl_img/logo-dhanvis.png" alt="<?=$Config_business_Name;?>">
                </a>
                
                <nav class="dv-nav">
                    <ul class="dv-nav__list">
                        <li class="dv-nav__item active">
                            <a href="index.php" class="dv-nav__link">Home</a>
                        </li>
                        <li class="dv-nav__item">
                            <a href="about.php" class="dv-nav__link">About Us</a>
                        </li>
                        <li class="dv-nav__item">
                            <a href="services.php" class="dv-nav__link">
                                Our Services
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M7 10l5 5 5-5z"/>
                                </svg>
                            </a>
                            <ul class="dv-nav__dropdown">
                                <li><a href="blade-inspection-services.php">Blade Inspection Services</a></li>
                                <li><a href="phased-array-ultrasonic-testing.php">Phased Array Ultrasonic Testing (PAUT)</a></li>
                                <li><a href="ultrasonic-testing-ut.php">Ultrasonic Testing (UT)</a></li>
                                <li><a href="non-destructive-testing.php">Non-Destructive Testing (NDT)</a></li>
                                <li><a href="qulaity-policy.php">Quality Policy</a></li>
                            </ul>
                        </li>
                        <li class="dv-nav__item">
                            <a href="industries-we-serve-dhanvis-ultratek.php" class="dv-nav__link">Industries We Serve</a>
                        </li>
                        <li class="dv-nav__item">
                            <a href="contact.php" class="dv-nav__link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="dv-nav__cta">
                        <a href="contact.php" class="dv-btn dv-btn--primary">Get a Quote</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<script>
// Header scroll effect
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('dvHeader');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
</script>
