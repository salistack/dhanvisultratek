<!-- Mobile Header -->
<div class="dv-mobile-header" id="dvMobileHeader">
    <div class="dv-mobile-header__inner">
        <a href="index.php" class="dv-mobile-header__logo">
            <img src="vl_img/logo-dhanvis.png" alt="<?=$Config_business_Name;?>">
        </a>
        <div class="dv-hamburger" id="dvHamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<!-- Mobile Menu -->
<nav class="dv-mobile-menu" id="dvMobileMenu">
    <ul class="dv-mobile-menu__list">
        <li class="dv-mobile-menu__item">
            <a href="index.php" class="dv-mobile-menu__link">Home</a>
        </li>
        <li class="dv-mobile-menu__item">
            <a href="about.php" class="dv-mobile-menu__link">About Us</a>
        </li>
        <li class="dv-mobile-menu__item" data-has-dropdown>
            <a href="services.php" class="dv-mobile-menu__link">
                Our Services
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M7 10l5 5 5-5z"/>
                </svg>
            </a>
            <ul class="dv-mobile-menu__dropdown">
                <li><a href="blade-inspection-services.php">Blade Inspection Services</a></li>
                <li><a href="phased-array-ultrasonic-testing.php">Phased Array Ultrasonic Testing (PAUT)</a></li>
                <li><a href="ultrasonic-testing-ut.php">Ultrasonic Testing (UT)</a></li>
                <li><a href="non-destructive-testing.php">Non-Destructive Testing (NDT)</a></li>
                <li><a href="qulaity-policy.php">Quality Policy</a></li>
            </ul>
        </li>
        <li class="dv-mobile-menu__item">
            <a href="industries-we-serve-dhanvis-ultratek.php" class="dv-mobile-menu__link">Industries We Serve</a>
        </li>
    </ul>
    
    <div class="dv-mobile-menu__cta">
        <a href="contact.php" class="dv-btn dv-btn--primary">Contact Us</a>
    </div>
    
    <!-- Contact Info in Mobile Menu -->
    <div class="dv-mobile-menu__contact" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1);">
        <a href="tel:<?=$Config_mobile_number;?>" style="display: flex; align-items: center; gap: 10px; color: #e2e8f0; padding: 10px 0; font-size: 14px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
            <?=$Config_mobile_number;?>
        </a>
        <a href="mailto:<?=$Config_email_ID;?>" style="display: flex; align-items: center; gap: 10px; color: #e2e8f0; padding: 10px 0; font-size: 14px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
            </svg>
            <?=$Config_email_ID;?>
        </a>
    </div>
</nav>

<script>
(function() {
    function initMobileMenu() {
        const hamburger = document.getElementById('dvHamburger');
        const mobileMenu = document.getElementById('dvMobileMenu');
        const menuItems = document.querySelectorAll('.dv-mobile-menu__item[data-has-dropdown]');
        
        if (!hamburger || !mobileMenu) {
            console.log('Mobile menu elements not found');
            return;
        }
        
        // Toggle mobile menu
        hamburger.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            this.classList.toggle('active');
            mobileMenu.classList.toggle('active');
            document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
        });
        
        // Toggle dropdown items
        menuItems.forEach(function(item) {
            const link = item.querySelector('.dv-mobile-menu__link');
            if (link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    
                    // Close other open dropdowns
                    menuItems.forEach(function(otherItem) {
                        if (otherItem !== item && otherItem.classList.contains('open')) {
                            otherItem.classList.remove('open');
                        }
                    });
                    
                    item.classList.toggle('open');
                });
            }
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (mobileMenu.classList.contains('active') && 
                !mobileMenu.contains(e.target) && 
                !hamburger.contains(e.target)) {
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }
    
    // Try to init immediately if DOM is ready, otherwise wait
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileMenu);
    } else {
        initMobileMenu();
    }
})();
</script>
