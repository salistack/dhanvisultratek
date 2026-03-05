<?php include 'config.php';?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 
$website_author="Dhanvis UltraTek Inspection Services";
$website_Description="Dhanvis UltraTek Inspection Services is a trusted provider of professional inspection and Non-Destructive Testing (NDT) services with specialized expertise in wind turbine blade inspection, evaluation, and quality assessment.";
$website_keywords="Dhanvis UltraTek Inspection Services Tamilnadu, inspection, evaluation, wind energy, oil & gas, power generation, Manufacturing, Heavy Engineering, Construction & Infrastructure, Fabrication & Welding";
$favicon="vl_img/fav32.png";
?>
	<link rel="icon" type="image/x-icon" href="<?=$favicon;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=10.0,">
	
    <meta name="robots" content="all, index, follow" />
    <meta name="googlebot" content="all, index, follow" /> 
    <meta name="revisit-after" content="7 days" />
    <meta name="allow-search" content="yes"/> 
    <meta name="rating" content="general" />
    <meta name="generator" content="BaseKit" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <meta name="coverage" content="Worldwide" />
	
	<meta name="keywords" content="<?=$website_keywords; ?>" />
	<meta name="description" content="<?=$website_Description; ?>">
    
    <meta name="abstract" content="<?=$website_keywords; ?>">
    <meta name="page-topic" content="<?=$website_keywords; ?>">
    <meta name="page-type" content="<?=$website_keywords; ?>">
    <meta property="og:description" content="<?=$website_Description; ?>" />
    <meta name="abstract" content="<?=$website_keywords; ?>">
    <meta name="page-topic" content="<?=$website_keywords; ?>">
    <meta name="page-type" content="<?=$website_keywords; ?>">
    <meta name="author" content="<?=$website_author; ?>" />

<title>Home - <?=$Config_business_Name;?></title>

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
<div class="industify_fn_wrapper_all" data-nav-skin="nobglight">
	
	<!-- Wrapper -->
	<div class="industify_fn_wrapper">
		
		<!-- Header -->
		<?php include 'includes/desktop-header.php';?>
		<!-- /Header -->
		
		<!-- Mobile Menu -->
		<?php include 'includes/mobile-header.php';?>
		<!-- /Mobile Menu -->
		
		<!-- Preloader -->
		<!--<div data-html="includes/preloader.html"></div>-->
		<!-- /Preloader -->
		
		
		<!-- Alpha Slider -->
		<!-- 
			 Available values:
			 
			 *  data-desc-show: yes, no (Description visibility)
			 *  data-category-show: yes, no (Category visibility)
			 *  data-nav-types: square, circle, rounded (Navigation button types)
			 *  data-autoplay-switch: enabled, disabled (Autoplay switcher)
			 *  data-autoplay-time: in milliseconds. 8000 = 8seconds (Autoplay time in millisconds)
			 *  data-effect: fade, coverflow, flip, cube, cards (Swiping effects)
			 *  data-progress: enabled, disabled (Top progress bar switcher)
			 *  data-box-pos: tl, tm, tr, cl, cm, cr, bl, bm, br (Content box position. Available values: tl - top left, tm - top middle, tr - top right, cl - center left, cm - center middle, cr - center right, bl - bottom left, bm - bottom middle, br - bottom right)
			 *  data-img-effect: enabled, disabled (Active effect for image)
			 *  data-text-effect: enabled, disabled (Active effect for text)
		-->
		<div class="industify_slider_alpha" data-desc-show="yes" data-category-show="yes" data-nav-types="square" data-autoplay-switch="enabled" data-autoplay-time="3000" data-effect="fade" data-progress="enabled" data-box-pos="cr" data-img-effect="enabled" data-text-effect="enabled">
			
			<!-- Alpha Slider: navigation -->
			<!--<div class="owl_control">
				<div class="fn_prev"><span><span class="a"></span><span class="b"></span><span class="c"></span></span></div>
				<div class="fn_next"><span><span class="a"></span><span class="b"></span><span class="c"></span></span></div>
			</div>-->
			<!-- /Alpha Slider: navigation -->
			
			<!-- Alpha Slider: pagination -->
			<!--<div class="swiper-pagination"></div>-->
			<!-- /Alpha Slider: pagination -->
			
			<!-- Alpha Slider: wrapper -->
			<div class="swiper-wrapper">
			
				<div class="swiper-slide">
					<div class="item">
					
					
					<div class="hero">
  <video class="bg-video" autoplay muted loop playsinline>
    <source src="vl_img/windmill-park.mov" type="video/mp4">
  </video>

  <div class="overlay"></div>

  <div class="hero-content">
    <h1>Precision in Wind. <span>Power in Trust.</span></h1>
    <p>
      Dhanvis UltraTek Inspection Services delivers reliable, accurate,
      and technology-driven inspection solutions across industries.
    </p>
  </div>
</div>

						
<!--<div class="img_holder">
  <video autoplay muted loop playsinline>
    <source src="vl_img/windmill-park.mov" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <h3><span>Precision Inspection.</span></h3>
									<div class="desc"><span>Dhanvis UltraTek Inspection Services delivers reliable, accurate, and technology-driven Non-Destructive Testing (NDT), Wind Turbine Inspection, and Asset Integrity Solutions across industries.</span></div>
</div>-->

						<!--<div class="title_holder">
							<div class="inner">
								<div class="in">
									<h3><span>Precision Inspection.</span></h3>
									<div class="desc"><span>Dhanvis UltraTek Inspection Services delivers reliable, accurate, and technology-driven Non-Destructive Testing (NDT), Wind Turbine Inspection, and Asset Integrity Solutions across industries.</span></div>
								</div>
							</div>
						</div>-->
						
					</div>
				</div>
				
				<?php /*?>
				<div class="swiper-slide">
					<div class="item">
						<div class="img_holder" data-bg-img="vl_img/banner2.jpg"></div>
						<div class="title_holder">
							<div class="inner">
								<div class="in">
									<!--<p><span>Construction</span></p>-->
									<h3><span>Quality Commitment</span></h3>
									<div class="desc"><span>We are committed to maintaining high standards of quality through continuous improvement, technical training, and compliance with international codes and industry best practices.</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="item">
						<div class="img_holder" data-bg-img="vl_img/banner3.jpg"></div>
						<div class="title_holder">
							<div class="inner">
								<div class="in">
									<h3><span>Health, Safety & Environment</span></h3>
									<div class="desc"><span>Safety is a core value at Dhanvis UltraTek Inspection Services. We follow strict HSE policies to protect our employees, clients, and the environment while delivering reliable inspection services.</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php */?>
			
			</div>
			<!-- Alpha Slider: wrapper -->
			
		</div>
		<!-- /Alpha Slider -->
		
		
		<?php /*?>
		<!-- Hero Header -->
		<div class="fn_cs_hero_header">
		   	<div class="container">
			 	<div class="content_holder max800">
				 	<div class="title_holder">
						<h3>Precision Inspection. Trusted Integrity.</h3>
						<p>Dhanvis UltraTek Inspection Services delivers reliable, accurate, and technology-driven Non-Destructive Testing (NDT), Wind Turbine Inspection, and Asset Integrity Solutions across industries.</p>
						<p>With certified professionals, advanced inspection technologies, and strict adherence to international standards, we support organizations in maintaining safety, performance, and long-term asset reliability.</p>
				 	</div>
				 	<div class="btn_holder fn_cs_lightgallery">
				 		<a class="discover" href="#">About Us</a>
				 		<span class="video lightbox" data-src="https://youtu.be/3j3SQEUfREs">
				 			<span class="icon"></span>
				 			<span class="text">Watch Video</span>
				 		</span>
				 	</div>
			  	</div>
		   	</div>
		   	<div class="bg_holder">
			  	<div class="o_img"></div>
			  	<div class="o_color"></div>
		   	</div>
		</div>
		<!-- /Hero Header -->
		<?php */?>
		
		
		<?php /*?>
		<!-- Introduce Shortcode -->
		<div class="fn_cs_introduce_wrap fn_cs_lightgallery" data-url-show="yes" data-wing-switch="enable">
		   	<div class="container">
			  	<div class="fn_cs_introduce">
			  	
				 	<span class="wing11"></span>
				 	<span class="wing12"></span>
				 	<span class="wing21"></span>
				 	<span class="wing22"></span>
				 	<span class="video lightbox" data-src="https://youtu.be/3j3SQEUfREs"><span></span></span>
					<div class="o_color"></div>
					
				 	<div class="content_holder">
						<div class="title_holder">
					   		<h5>Let Me Introduce</h5>
					   		<h3>Our Company</h3>
					   		<p>Dhanvis UltraTek Inspection Services is a trusted provider of professional inspection and Non-Destructive Testing (NDT) services with specialized expertise in wind turbine blade inspection, evaluation, and quality assessment.</p>
						</div>
						<div class="badge_holder">
					   		<div class="title">
						 		<h3>Commitment to Safety & Quality</h3>
					   		</div>
					   		<div class="content"><span class="year">20</span><span>years of experience</span></div>
						</div>
				 	</div>
			  	</div>
		   	</div>
		</div>
		<!-- /Introduce Shortcode -->
		<?php */?>
		
		
		<!-- Service Classic Shortcode -->
		<div class="fn_cs_services_classic">
		   	<div class="container">
				<div class="list">
				   	<ul>
						<li>
							<div class="item">
								<a href="#"></a><span class="bg1"></span><span class="bg2"></span>
								<span class="icon">
								   	<img class="fn__svg" src="svg/service/learning.svg" alt="svg" />
								</span>
								<h3>Advanced NDT Techniques</h3>
								<!--<p>During this phase, we will work to provide a detailed analysis of the project and we will establish project expectations along with our clients.</p>
								<span class="more_details">
									<a href="#">
										More Details
										<img class="fn__svg" src="svg/arrow-r.svg" alt="svg" />
									</a>
								</span>-->
							</div>
						</li>
						<li>
							<div class="item">
								<a href="#"></a><span class="bg1"></span><span class="bg2"></span>
								<span class="icon">
								   	<img class="fn__svg" src="svg/service/drawing.svg" alt="svg" />
								</span>
								<h3>Wind Blade Inspection Specialists</h3>
							</div>
						</li>
						<li>
							<div class="item">
								<a href="#"></a><span class="bg1"></span><span class="bg2"></span>
								<span class="icon">
								   	<img class="fn__svg" src="svg/service/design.svg" alt="svg" />
								</span>
								<h3>Accurate Evaluation & Reporting</h3>
							</div>
						</li>
						<li>
							<div class="item">
								<a href="#"></a><span class="bg1"></span><span class="bg2"></span>
								<span class="icon">
								   	<img class="fn__svg" src="svg/service/tower-crane.svg" alt="svg" />
								</span>
								<h3>Commitment to Safety & Quality</h3>
							</div>
						</li>
					</ul>
			  	</div>
		   	</div>
		</div>
		<!-- /Service Classic Shortcode -->
		
		
		
		<!-- Info & Rating -->
		<div class="fn_cs_info_rating">
			<div class="container">
				<div class="inner">
					<div class="left_part">
						<div class="title_holder">
							<h3 class="l_title fade-on-scroll">Best Service Provider in India</h3>
							<p class="l_desc fade-on-scroll">We focus on building long-term partnerships through technical excellence, transparency, and customer satisfaction.</p>
						</div>
						<div class="l_video fn_cs_lightgallery">
							<span class="lightbox" data-src="https://youtu.be/3j3SQEUfREs">
								<span class="icon">
									<img class="fn__svg" src="svg/play-video.svg" alt="svg" />
								</span>
								<span class="text">View Company Promo Video</span>
							</span>
						</div>
					</div>
					<div class="middle_part">
				   		<div class="m_in">
				   			<div class="rating_holder">
				   				<div class="r_header"></div>
						  		<div class="r_footer"></div>
						  		<a href="#"></a>
						  		<img class="fn__svg" src="svg/stars.svg" alt="svg" />
						  		<h3 class="rating_number">9.7</h3>
						  		<h3 class="rating_text">Customer Rating</h3>
					   		</div>
							<div class="tagline_holder">
						  		<div class="tl_inner"><span>Full reviews at trustpilot</span></div>
							</div>
						</div>
				 	</div>
				 	<div class="right_part effectFade">
						<div class="o_img" data-bg-img="vl_img/rating_banner.jpg"></div>
						<div class="o_color"></div>
				 	</div>
			  	</div>
		   	</div>
		</div>
		<!-- /Info & Rating -->
		
		
		<!-- Principles -->
		<div class="fn_cs_principles">
			<div class="container">
				<div class="inner">
					<div class="left_part">
						<h3 class="fade-on-scroll">Why Choose Us?</h3>
						<p class="fade-on-scroll">We are committed to maintaining high standards of quality through continuous improvement, technical training, and compliance with international codes and industry best practices.</p>
					</div>
					<div class="right_part">
						<ul class="masonry">
							<li class="masonry_in choosePoints">
								<div class="item">
									<div class="title_holder">
										<h3>Certified & Experienced Inspection Professionals</h3>
									</div>
									<div class="number_holder">01</div>
								</div>
							</li>
							<li class="masonry_in choosePoints">
								<div class="item">
									<div class="title_holder">
										<h3>Specialized Expertise in Wind Blade Inspection</h3>
										<!--<p>Be sure of our facts and be honest and straightforward in all of our dealings with each other and our clients.</p>-->
									</div>
									<div class="number_holder">02</div>
								</div>
							</li>
							<li class="masonry_in choosePoints">
								<div class="item">
									<div class="title_holder">
										<h3>Advanced Inspection Equipment</h3>
									</div>
									<div class="number_holder">03</div>
								</div>
							</li>
							<li class="masonry_in choosePoints">
								<div class="item">
									<div class="title_holder">
										<h3>Accurate Data Evaluation & Reporting</h3>
									</div>
									<div class="number_holder">04</div>
								</div>
							</li>
							<li class="masonry_in choosePoints">
								<div class="item">
									<div class="title_holder">
										<h3>Compliance with International Standard</h3>
									</div>
									<div class="number_holder">05</div>
								</div>
							</li>
							<li class="masonry_in choosePoints">
								<div class="item">
									<div class="title_holder">
										<h3>Strong Commitment to Safety & Quality</h3>
									</div>
									<div class="number_holder">06</div>
								</div>
							</li>
							<li class="masonry_in choosePoints">
								<div class="item">
									<div class="title_holder">
										<h3>Client-Focused & Transparent Approach</h3>
									</div>
									<div class="number_holder">07</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /Principles -->
		
		
		<!-- Support Section -->
		<div class="support_section_2">
			<!-- Support Shortcode -->
			<div class="fn_cs_support_block" data-icon-type="none">
				<div class="container">
					<div class="support_block">
						<div class="content">
							<div class="desc">
							<h2 class="fade-on-scroll">Health, Safety & Environment</h2>
							<p class="fade-on-scroll">Safety is a core value at Dhanvis UltraTek Inspection Services. We follow strict HSE policies to protect our employees, clients, and the environment while delivering reliable inspection services.</p>
							</div>
							<!--<div class="bottom_section">
								<div class="link_block"><a href="#">Contact us today</a></div>
								<div class="tfree_block">
									<p>Give us a call: <a href="tel:<?=$Config_mobile_number;?>"><?=$Config_mobile_number;?></a> / <a href="tel:<?=$Config_mobile_number2;?>"><?=$Config_mobile_number2;?></a> </p>
								</div>
							</div>-->
						</div>
						<div class="img_wrap">
							<span></span>
							<img src="img/about/support.png" alt="">
						</div>
				  </div>
			   </div>
			</div>
			<!-- /Support Shortcode -->
		</div>
		<!-- /Support Section -->
		
		
		<?php /* ?>
		<!-- Project Sticky Modern Shortcode -->
		<div class="fn_cs_project_sticky_modern" data-animation-type="alpha">
			<div class="container">
				<div class="inner">
					<div class="left_part">
						<div class="fn_cs_sticky_section">
							<div class="left_part_in">
								<h3>Our latest Projects</h3>
								<p>It's a burning, never-ending desire to help our clients maximize their outcomes and exceed their strategic goals. Though our goal is a bit aspirational, our values are what drive us every day. </p>
								<a href="portfolio.html">All Projects</a>
							</div>
						</div>
					</div>
					<div class="right_part">
						<div class="fn_cs_sticky_section">
							<ul>
								<li>
									<div class="item">
										<div class="img_holder">
											<img src="img/thumb/560-375.jpg" alt="">
											<div class="abs_img" data-bg-img="img/portfolio/1.jpg"><a href="portfolio-single-1.html"></a></div>
										</div>
										<div class="title_holder">
											<h3><a href="portfolio-single-1.html">Industify Gas and Oil Organization</a></h3>
											<p>
												<a href="portfolio-single-1.html">
													<span class="text">View More</span>
													<span class="arrow">
														<img class="fn__svg" src="svg/arrow-r.svg" alt="svg" />
													</span>
												</a>
											</p>
											<a href="portfolio-single-1.html"></a>
										</div>
									</div>
								</li>
								<li>
									<div class="item">
										<div class="img_holder">
											<img src="img/thumb/560-375.jpg" alt="">
											<div class="abs_img" data-bg-img="img/portfolio/2.jpg"><a href="portfolio-single-2.html"></a></div>
										</div>
										<div class="title_holder">
											<h3><a href="portfolio-single-2.html">Chaban Car Industry</a></h3>
											<p>
												<a href="portfolio-single-2.html">
													<span class="text">View More</span>
													<span class="arrow">
														<img class="fn__svg" src="svg/arrow-r.svg" alt="svg" />
													</span>
												</a>
											</p>
											<a href="portfolio-single-2.html"></a>
										</div>
									</div>
								</li>
								<li>
									<div class="item">
										<div class="img_holder">
											<img src="img/thumb/560-375.jpg" alt="">
											<div class="abs_img" data-bg-img="img/portfolio/3.jpg"><a href="portfolio-single-3.html"></a></div>
										</div>
										<div class="title_holder">
											<h3><a href="portfolio-single-3.html">Industify Gas and Oil Organization</a></h3>
											<p>
												<a href="portfolio-single-3.html">
													<span class="text">View More</span>
													<span class="arrow">
														<img class="fn__svg" src="svg/arrow-r.svg" alt="svg" />
													</span>
												</a>
											</p>
											<a href="portfolio-single-3.html"></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Project Sticky Modern Shortcode -->
		<?php */?>
		
		
		<?php /*?>
		<!-- Blog Section -->
		<div class="blog_section">
			
			<div class="overlay" data-bg-img="img/blog/map.png"></div>
			
			<!-- Main Title -->
			<div class="fn_cs_main_title">
				<div class="container">
					<div class="title_holder">
						<h3>Thoughts &amp; Experiments</h3>
					</div>
				</div>
			</div>
			<!-- /Main Title -->
			
			<!-- Triple Blog Modern Shortcode -->
			<div class="fn_cs_triple_blog_modern fn_alpha">
			   <div class="container">
				  <div class="inner">
				  
					 <ul>
						<li>
						   <div class="item">
							  <div class="img_holder" data-bg-img="img/blog/1.jpg">
								 <div class="time">
									<span></span>
									<h3>28</h3>
									<h5>Aug</h5>
									<h5>2018</h5>
								 </div>
								 <a href="blog-single-1.html"></a>
								 <img src="img/thumb/370-250.jpg" alt="">
							  </div>
							  <div class="title_holder">
								 <p class="t_header">By <a href="#">Frenify</a> — In <a href="#">Australia</a></p>
								 <h3><a href="blog-single-1.html">Laing O’Rourke: Moves, projects and bids</a></h3>
								 <p class="t_footer"><a href="blog-single-1.html">Read More</a></p>
							  </div>
						   </div>
						</li>
						<li>
						   <div class="item">
							  <div class="img_holder" data-bg-img="img/blog/2.jpg">
								 <div class="time">
									<span></span>
									<h3>27</h3>
									<h5>Aug</h5>
									<h5>2018</h5>
								 </div>
								 <a href="blog-single-2.html"></a>
								 <img src="img/thumb/370-250.jpg" alt="">
							  </div>
							  <div class="title_holder">
								 <p class="t_header">By <a href="#">Frenify</a> — In <a href="#">Australia</a></p>
								 <h3><a href="blog-single-2.html">How to turn Victorian gasholders apartments</a></h3>
								 <p class="t_footer"><a href="blog-single-2.html">Read More</a></p>
							  </div>
						   </div>
						</li>
						<li>
						   <div class="item">
							  <div class="img_holder" data-bg-img="img/blog/3.jpg">
								 <div class="time">
									<span></span>
									<h3>26</h3>
									<h5>Aug</h5>
									<h5>2018</h5>
								 </div>
								 <a href="blog-single-3.html"></a>
								 <img src="img/thumb/370-250.jpg" alt="">
							  </div>
							  <div class="title_holder">
								 <p class="t_header">By <a href="#">Frenify</a> — In <a href="#">Australia</a></p>
								 <h3><a href="blog-single-3.html">CITB appoints Peter Lauener as new chairman</a></h3>
								 <p class="t_footer"><a href="blog-single-3.html">Read More</a></p>
							  </div>
						   </div>
						</li>
					 </ul>
					 
				  </div>
			   </div>
			</div>
			<!-- /Triple Blog Modern Shortcode -->
			
		</div>
		<!-- /Blog Section -->
		<?php */?>
		
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