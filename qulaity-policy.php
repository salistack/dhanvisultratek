<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Quality Policy - Dhanvis UltraTek is committed to delivering accurate, reliable inspection results following international standards.">
  <title>Quality Policy - <?=$Config_business_Name;?></title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <link rel="stylesheet" href="css/theme.css">
</head>
<body>
  
  <!-- Header -->
  <?php include 'includes/header-new.php'; ?>
  
  <!-- Mobile Header -->
  <?php include 'includes/mobile-header-new.php'; ?>
  
  <!-- Page Banner -->
  <section class="dv-page-banner">
    <video class="dv-page-banner__video" autoplay muted loop playsinline>
      <source src="vl_img/windmill-park.mov" type="video/mp4">
    </video>
    <div class="dv-page-banner__overlay"></div>
    <div class="dv-container">
      <div class="dv-page-banner__content">
        <h1>Quality Policy</h1>
        <nav class="dv-breadcrumb">
          <a href="index.php">Home</a>
          <span>/</span>
          <a href="services.php">Services</a>
          <span>/</span>
          <span>Quality Policy</span>
        </nav>
      </div>
    </div>
  </section>
  
  <!-- Service Info Section -->
  <section class="dv-service-info">
    <div class="dv-container">
      <div class="dv-service-info__grid">
        
        <!-- Main Content -->
        <div class="dv-service-info__main">
          <div class="dv-service-info__image">
            <img src="vl_img/quality.jpg" alt="Quality Policy">
          </div>
          <div class="dv-service-info__content">
            <h2>Our Commitment to Excellence</h2>
            <p>At Dhanvis UltraTek Inspection Services, quality is the foundation of every inspection we perform.</p>
            
            <div class="dv-service-info__section">
              <h3>We Are Committed To</h3>
              <ul class="dv-service-info__list">
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Delivering accurate and reliable inspection results</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Following international codes, standards, and procedures</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Ensuring inspector competency and continuous training</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Maintaining transparency, integrity, and confidentiality</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Promoting safety, compliance, and customer satisfaction</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Continuously improving inspection processes and technologies</span>
                </li>
              </ul>
            </div>
            
            <div class="dv-service-info__footer">
              <p>Our goal is to support clients in achieving defect-free production, operational safety, and long-term asset reliability.</p>
            </div>
            
          </div>
        </div>
        
        <!-- Sidebar -->
        <aside class="dv-service-sidebar">
          <div class="dv-sidebar-widget">
            <h3 class="dv-sidebar-widget__title">Our Services</h3>
            <ul class="dv-sidebar-links">
              <li><a href="blade-inspection-services.php">Blade Inspection Services</a></li>
              <li><a href="phased-array-ultrasonic-testing.php">Phased Array Ultrasonic Testing</a></li>
              <li><a href="ultrasonic-testing-ut.php">Ultrasonic Testing (UT)</a></li>
              <li><a href="non-destructive-testing.php">Non-Destructive Testing</a></li>
              <li><a href="qulaity-policy.php" class="active">Quality Policy</a></li>
            </ul>
          </div>
          
          <div class="dv-sidebar-cta">
            <h3>Partner With Us</h3>
            <p>Contact us today to discuss your inspection requirements.</p>
            <a href="contact.php" class="dv-btn">Get a Quote</a>
          </div>
        </aside>
        
      </div>
    </div>
  </section>
  
  <!-- CTA Section -->
  <section class="dv-cta-section">
    <div class="dv-container">
      <div class="dv-cta-content">
        <h2>Quality You Can Trust</h2>
        <p>Experience the Dhanvis UltraTek commitment to excellence in every inspection.</p>
        <a href="contact.php" class="dv-btn dv-btn--white">Contact Us Today</a>
      </div>
    </div>
  </section>
  
  <!-- Footer -->
  <?php include 'includes/footer-new.php'; ?>
  
  <!-- Scripts -->
  <script src="js/jquery.js"></script>
  <script src="js/animations.js"></script>
  <script src="js/init.js"></script>
</body>
</html>
