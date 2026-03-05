<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Phased Array Ultrasonic Testing (PAUT) - Advanced NDT method for high-resolution defect detection and accurate flaw sizing.">
  <title>Phased Array Ultrasonic Testing (PAUT) - <?=$Config_business_Name;?></title>
  
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
        <h1>Phased Array Ultrasonic Testing (PAUT)</h1>
        <nav class="dv-breadcrumb">
          <a href="index.php">Home</a>
          <span>/</span>
          <a href="services.php">Services</a>
          <span>/</span>
          <span>PAUT</span>
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
            <img src="vl_img/paut.jpg" alt="Phased Array Ultrasonic Testing">
          </div>
          <div class="dv-service-info__content">
            <h2>Advanced Ultrasonic Inspection Technology</h2>
            <p>Phased Array Ultrasonic Testing is an advanced ultrasonic method that uses multiple probe elements and electronic beam steering to detect and size internal flaws with high accuracy.</p>
            
            <div class="dv-service-info__section">
              <h3>Key Benefits</h3>
              <ul class="dv-service-info__list">
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>High-resolution defect detection</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Accurate flaw sizing and positioning</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Faster inspection with digital data recording</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Suitable for weld inspections and critical components</span>
                </li>
              </ul>
            </div>
            
            <div class="dv-service-info__section">
              <h3>Applications</h3>
              <ul class="dv-service-info__list">
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Weld inspection</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Corrosion mapping</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Crack detection</span>
                </li>
                <li>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                  <span>Structural integrity evaluation</span>
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
              <li><a href="phased-array-ultrasonic-testing.php" class="active">Phased Array Ultrasonic Testing</a></li>
              <li><a href="ultrasonic-testing-ut.php">Ultrasonic Testing (UT)</a></li>
              <li><a href="non-destructive-testing.php">Non-Destructive Testing</a></li>
              <li><a href="qulaity-policy.php">Quality Policy</a></li>
            </ul>
          </div>
          
          <div class="dv-sidebar-cta">
            <h3>Need PAUT Services?</h3>
            <p>Contact us today for professional inspection services.</p>
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
        <p>Partner with Dhanvis UltraTek for expert phased array ultrasonic testing services.</p>
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
