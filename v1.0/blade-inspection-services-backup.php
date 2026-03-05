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

<title>Blade Inspection Services - <?=$Config_business_Name;?></title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
<!-- /Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/vl_style.css" />
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
		
		
		<!-- Page Title -->
		<div class="industify_fn_pagetitle">
			<div class="container">
				<div class="title_holder">
					<h3>Blade Inspection Services</h3>
					<div class="industify_fn_breadcrumbs">
						<ul>
							<li><a href="./" title="Home">Home</a></li>
							<li class="separator"><span></span></li>
							<li><span class="bread-current"> Our Services</span></li>
							<li class="separator"><span></span></li>
							<li><span class="bread-current"> Blade Inspection Services</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Page Title -->
		
		
		<!-- Sidebar Page -->
		<div class="industify_fn_sidebarpage">
			<div class="container">
				<div class="s_inner">
				
				
					<!-- Main Sidebar: Left -->
					<div class="industify_fn_leftsidebar">
						<ul class="industify_fn_service_list">
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/1.jpg"/>
										</div>
										<div class="title">
											<h3>Wind Blade Specialized Services</h3>
											<p>We provide expert inspection and evaluation services focused on wind turbine blades, ensuring safety, reliability, and long-term performance through advanced inspection techniques.</p>
										</div>
										<!--<div class="read_more">
											<a href="service-single-9.html">Read More</a>
										</div>-->
									</div>
								</div>
							</li>
							
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/2.jpg"/>
										</div>
										<div class="title">
											<h3>Wind Blade PAUT Data Evaluation & Interpretation</h3>
											<p>We perform detailed analysis of PAUT scan data to accurately identify, size, and classify defects, supporting informed technical decisions and reliable reporting.</p>
										</div>
									</div>
								</div>
							</li>
							
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/3.jpg"/>
										</div>
										<div class="title">
											<h3>Wind Blade Quality Assessment</h3>
											<p>A comprehensive assessment of wind blade condition to verify structural integrity, manufacturing quality, and service readiness.</p>
										</div>
									</div>
								</div>
							</li>
							
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/4.jpg"/>
										</div>
										<div class="title">
											<h3>Wind Blade Repair Advisory</h3>
											<p>Based on inspection results, we offer technical recommendations and repair guidance to support effective corrective actions and defect mitigation.</p>
										</div>
									</div>
								</div>
							</li>
							
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/5.jpg"/>
										</div>
										<div class="title">
											<h3>Wind Blade Third-Party Inspection</h3>
											<p>Independent inspection services to verify compliance with client specifications, standards, and quality requirements during manufacturing, repair, or installation stages.</p>
										</div>
									</div>
								</div>
							</li>
							
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/6.jpg"/>
										</div>
										<div class="title">
											<h3>Wind Blade Third-Party Audit</h3>
											<p>Objective audits to evaluate and confirm the quality of manufacturing, repair, and maintenance processes, ensuring adherence to approved procedures and standards.</p>
										</div>
									</div>
								</div>
							</li>
							
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/7.jpg"/>
										</div>
										<div class="title">
											<h3>Drone Inspection</h3>
											<p>Advanced drone-assisted inspections provide a safe, efficient, and cost-effective solution for visual examination of wind turbine blades and structures, minimizing downtime and access risks.</p>
										</div>
									</div>
								</div>
							</li>
							
							<li>
								<div class="item">
									<div class="item_in">
										<div class="img_holder">
											<img class="img_abs" src="img/service/single/8.png"/>
										</div>
										<div class="title">
											<h3>Wind Turbine Tower Inspection</h3>
											<p>Inspection services to assess the structural integrity and condition of wind turbine towers, supporting safe operation and long-term asset reliability.</p>
										</div>
									</div>
								</div>
							</li>
							
						</ul>
						
						<div class="clearfix"></div>
						
					</div>
					<!-- /Main Sidebar: Left -->
					
					
					<!-- Main Sidebar: Right -->
					<div class="industify_fn_rightsidebar">
					
					
						<!-- Service List -->
						<div class="service_list_as_function">
							<div class="title">
								<h3>Our Services</h3>
							</div>
							<div class="list_holder">
								<ul>
								<li><a href="blade-inspection-services">Blade Inspection Services</a></li>
									<li><a href="phased-array-ultrasonic-testing">Phased Array Ultrasonic Testing (PAUT)</a></li>
									<li><a href="ultrasonic-testing-ut">Ultrasonic Testing (UT)</a></li>
									<li><a href="non-destructive-testing">Non-Destructive Testing (NDT)</a></li>
									<li><a href="qulaity-policy">Quality Policy</a></li>
								</ul>
							</div>
						</div>
						<!-- /Service List -->
						
						<!-- Get Sidebar -->
						<!--<div data-html="includes/sidebar.html"></div>-->
						<?php include 'includes/sidebar.php';?>
						<!-- /Get Sidebar -->
						
						
					</div>
					<!-- Main Sidebar: Right -->
					
				</div>
			</div>
		</div>
		<!-- /Sidebar Page -->
		
		
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
