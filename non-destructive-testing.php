<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Non-Destructive Testing (NDT) - Comprehensive inspection techniques to evaluate materials and structures without causing damage.">
  <title>Non-Destructive Testing (NDT) - <?=$Config_business_Name;?></title>
  
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
        <h1>Non-Destructive Testing (NDT)</h1>
        <nav class="dv-breadcrumb">
          <a href="index.php">Home</a>
          <span>/</span>
          <a href="services.php">Services</a>
          <span>/</span>
          <span>NDT</span>
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
            <img src="vl_img/ndt.jpg" alt="Non-Destructive Testing">
          </div>
          <div class="dv-service-info__content">
            <h2>Comprehensive Material Evaluation</h2>
            <p>NDT involves inspection techniques used to evaluate materials and structures without causing damage, ensuring safety and reliability of critical components.</p>
            
            <div class="dv-service-info__section">
              <h3>Methods Offered</h3>
              <ul class="dv-service-info__list">
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Visual Testing (VT)</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Ultrasonic Testing (UT)</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Phased Array Ultrasonic Testing (PAUT)</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Radiographic Testing (RT) coordination</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Inspection reporting & evaluation</span>
                </li>
              </ul>
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
              <li><a href="non-destructive-testing.php" class="active">Non-Destructive Testing</a></li>
              <li><a href="qulaity-policy.php">Quality Policy</a></li>
            </ul>
          </div>
          
          <div class="dv-sidebar-cta">
            <h3>Need NDT Services?</h3>
            <p>Contact us today for comprehensive inspection solutions.</p>
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
        <h2>Ready to Get Started?</h2>
        <p>Partner with Dhanvis UltraTek for expert non-destructive testing services.</p>
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
