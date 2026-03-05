<?php include 'config.php';?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Industify">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Industries We Serve : <?=$Config_business_Name;?></title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
<!-- /Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/vl_style.css?ver=2" />
<link type="text/css" rel="stylesheet" href="css/base.css?ver=3" />
<link type="text/css" rel="stylesheet" href="css/justified.css?ver=3" />
<link type="text/css" rel="stylesheet" href="css/fontello.css?ver=3" />
<link type="text/css" rel="stylesheet" href="css/magnific-popup.css?ver=3" />
<link type="text/css" rel="stylesheet" href="css/swiper.css?ver=3" />
<link type="text/css" rel="stylesheet" href="css/lightgallery.css?ver=3" />
<link type="text/css" rel="stylesheet" href="css/owl-carousel.css?ver=3" />
<link type="text/css" rel="stylesheet" href="css/style.css?ver=3" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js?ver=3"></script> <![endif]-->
<!-- /Styles -->

</head>

<body>

<!---Basic (block everywhere)--->
<script>
  // Prevent the context menu on right-click
  document.addEventListener('contextmenu', function (e) {
    e.preventDefault();
  });
</script>
<!--Block right-click but allow on form fields (inputs, textareas, contenteditable)-->
<script>
  document.addEventListener('contextmenu', function (e) {
    const tag = e.target.tagName.toLowerCase();
    const isEditable = e.target.isContentEditable || tag === 'input' || tag === 'textarea' || tag === 'select';
    if (!isEditable) e.preventDefault();
  });
</script>

<!-- Wrapper All -->
<div class="industify_fn_wrapper_all">
	
	<!-- Wrapper -->
	<div class="industify_fn_wrapper">
		
		<!-- Header -->
		<?php include 'includes/desktop-header.php';?>
		<!-- /Header -->
		
		<!-- Mobile Menu -->
		<?php include 'includes/mobile-header.php';?>
		<!-- /Mobile Menu -->
				<div class="menu-bottom-border"></div>

		
		<!-- Preloader -->
		<div data-html="includes/preloader.html"></div>
		<!-- /Preloader -->
		
		
		<!-- /Icon Features Bar -->

		<!-- Industries Heading Section -->
		<div class="iws-heading-section">
			<div class="container">
				<h2 class="iws-main-title">Industries We Serve</h2>
				<p class="iws-main-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance, and participation opportunities. The design should motivate people to take active steps in protecting nature and supporting Eco Planet's initiatives.</p>
			</div>
		</div>
		<!-- /Industries Heading Section -->

		<!-- Industries Cards Section -->
		<div class="iws-cards-section">
			<div class="container">

				<!-- Row 1: Wind Energy -->
				<div class="iws-card-row">
					<div class="iws-card-tall-img">
						<img src="vl_img/wind.jpg" alt="Wind Energy">
					</div>
					<div class="iws-card-content">
						<h3 class="iws-card-title">WIND ENERGY</h3>
						<p class="iws-card-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance.</p>
						<div class="iws-card-thumbs">
							<div class="iws-thumb"><img src="vl_img/oil.jpg" alt="Wind Energy Detail 1"></div>
							<div class="iws-thumb"><img src="vl_img/power.jpg" alt="Wind Energy Detail 2"></div>
						</div>
					</div>
				</div>

				<!-- Row 2: Oil & Gas | Construction & Welding -->
				<div class="iws-card-row-double">
					<div class="iws-card-half">
						<h3 class="iws-card-title">OIL & GAS</h3>
						<p class="iws-card-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance</p>
					</div>
					<div class="iws-card-half">
						<h3 class="iws-card-title">CONSTRUCTION & WELDING</h3>
						<p class="iws-card-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance</p>
					</div>
				</div>

				<!-- Row 3: Power Generation -->
				<div class="iws-card-row iws-card-row-reverse">
					<div class="iws-card-tall-img">
						<img src="vl_img/power.jpg" alt="Power Generation">
					</div>
					<div class="iws-card-content">
						<h3 class="iws-card-title">POWER GENERATION</h3>
						<p class="iws-card-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance.</p>
						<div class="iws-card-thumbs">
							<div class="iws-thumb"><img src="vl_img/manufacturing.jpg" alt="Power Detail 1"></div>
							<div class="iws-thumb"><img src="vl_img/heavy.jpg" alt="Power Detail 2"></div>
						</div>
					</div>
				</div>

				<!-- Row 4: Manufacturing | Heavy Engineering -->
				<div class="iws-card-row-double">
					<div class="iws-card-half">
						<h3 class="iws-card-title">MANUFACTURING</h3>
						<p class="iws-card-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance</p>
					</div>
					<div class="iws-card-half">
						<h3 class="iws-card-title">HEAVY ENGINEERING</h3>
						<p class="iws-card-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance</p>
					</div>
				</div>

				<!-- Row 5: Construction & Infrastructure -->
				<div class="iws-card-row">
					<div class="iws-card-tall-img">
						<img src="vl_img/construction.jpg" alt="Construction & Infrastructure">
					</div>
					<div class="iws-card-content">
						<h3 class="iws-card-title">CONSTRUCTION & INFRASTRUCTURE</h3>
						<p class="iws-card-desc">Create a visually appealing and user-friendly design that effectively communicates information about the organization's projects, their importance.</p>
						<div class="iws-card-thumbs">
							<div class="iws-thumb"><img src="vl_img/s3.jpg" alt="Construction Detail 1"></div>
							<div class="iws-thumb"><img src="vl_img/ndt.jpg" alt="Construction Detail 2"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /Industries Cards Section -->
		
		
		
		<!-- Footer -->
		<?php include 'includes/footer.php';?>
		<!-- /Footer -->
		
		
		
	</div>
	<!-- /Wrapper -->
	
	
</div>
<!-- /Wrapper All -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery.js?ver=3"></script>
<script type="text/javascript" src="js/justified.js?ver=3"></script>
<script type="text/javascript" src="js/waypoints.js?ver=3"></script>
<script type="text/javascript" src="js/countto.js?ver=3"></script>
<script type="text/javascript" src="js/magnific-popup.js?ver=3"></script>
<script type="text/javascript" src="js/kenburnsy.js?ver=3"></script>
<script type="text/javascript" src="js/isotope.js?ver=3"></script>
<script type="text/javascript" src="js/lightgallery.js?ver=3"></script>
<script type="text/javascript" src="js/swiper.js?ver=3"></script>
<script type="text/javascript" src="js/parallax.js?ver=3"></script>
<script type="text/javascript" src="js/owl-carousel.js?ver=3"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js?ver=3"></script> <![endif]-->
<script type="text/javascript" src="js/init.js?ver=3"></script>
<!-- /Scripts -->

</body>
</html>