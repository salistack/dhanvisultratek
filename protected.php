<?php include 'config.php';?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Industify">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?=$Config_business_Name;?></title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
<!-- /Google Fonts -->

<!-- Styles -->
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
		
		<!-- Preloader -->
		<div data-html="includes/preloader.html"></div>
		<!-- /Preloader -->
		
		
		<!-- Protected Page -->
		<div class="industify_fn_password_protected">
			<div class="container">
				<div class="message_holder max550">
					<h1>Protected</h1>
					<h3>This page was protected</h3>
					<p>This content is password protected. To view it please enter your password below:</p>
					<div class="submit_holder">
						<form method="get">
							<div><input name="post_password" type="password" placeholder="Password" autocomplete="off" /></div>
							<div><input type="submit" name="Submit" value="Authenticate" /></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Protected Page -->
		
		
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