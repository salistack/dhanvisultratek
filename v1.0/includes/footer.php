<footer class="industify_fn_footer">
<?php /*?>
		   <div class="top_footer">
			  <div class="top_footer_img" data-fn-bg-img="img/footer/bg.jpg"></div>
			  <!-- SUBSCRIBE -->
			  <!--<div class="subscribe_f">
				 <div class="container">
					<div class="subscribe_in">
					   	<div class="s_left">
						  	<img class="fn__svg" src="svg/open-book.svg" alt="svg" />
						  	<p>Newsletter — get updates with latest topics</p>
					   	</div>
					   	<div class="s_right">
						  	<div class="subscriber">
							 	<input type="email" placeholder="Your e-mail address *" />
							 	<input type="submit" value="Subscribe" />
						  	</div>
					   	</div>
					</div>
				 </div>
			  </div>-->
			  <!-- /SUBSCRIBE -->
			  <!-- TRIPLE WIDGET -->
			  <div class="footer_widget">
				 <div class="container">
					<div class="inner">
					   <ul class="widget_area">
						  <li>
							 <div class="item">
								<div class="logo">
									<a href="./"><img src="vl_img/logo_250.png" alt="<?=$Config_business_Name;?>"></a>
								</div>
								<div class="textwidget">
									<p>We are focused on user-driven outcomes, we strive to create meaningful connections for users through considered strategy and innovation.</p>
								</div>
							 </div>
						  </li>
						  <li>
							 <div class="item">
								<div class="wid-title">
									<span>Business Hours</span>
								</div>
								<div class="industify_fn_widget_business_hours">
								  	<div>
										<ul>
									  		<li>
										  		<div class="day_item">
											 		<span class="day">Monday-Friday:</span>
											 		<span class="hours">9am to 5pm</span>
										  		</div>
									   		</li>
									   		<li>
										  		<div class="day_item">
											 		<span class="day">Saturday:</span>
											 		<span class="hours">10am to 3pm</span>
										  		</div>
									   		</li>
									   		<li>
										  		<div class="day_item">
											 		<span class="day">Sunday:</span>
											 		<span class="hours">Closed</span>
										  		</div>
									   		</li>
										</ul>
								  	</div>
								</div>
							 </div>
						  </li>
						  <li>
							 <div class="item">
								 <div class="wid-title"><span>Helpful Links</span></div>
								 <div class="widget_nav_menu">
									<ul class="menu">
										<li><a href="#">Our Services</a></li>
										<li><a href="#">Disclaimer</a></li>
										<li><a href="#">Showcase</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Affliates</a></li>
									</ul>
								 </div>
							 </div>
						  </li>
					   </ul>
					</div>
				 </div>
			  </div>
			  <!-- /TRIPLE WIDGET -->
		   </div>
		   <?php */?>
		   
		   <!-- BOTTOM -->
		   <div class="footer_bottom">
			  <div class="container">
				 <div class="footer_bottom_in">
					<div class="bottom_widget">
					   	<div class="widget_nav_menu">
							<ul class="menu">
								<li><a href="./">Home</a></li>
								<li><a href="about">About Us</a></li>
								<li><a href="services">Our Services</a></li>
								<li><a href="industries-we-serve-dhanvis-ultratek">Industries We Serve</a></li>
								<li><a href="contact">Contact Us</a></li>
							</ul>
					   	</div>
					</div>
					<div class="footer_copyright">
					   <p>&copy; <?=$Config_Copyright;?>. All rights reserved. developed by <a href="https://adlernova.com//" target="_blank">Adler Nova</a></p>
					</div>
					<!--<a class="industify_fn_totop" href="#">
						<span class="top"></span>
						<span class="text">To Top</span>
					</a>--->
				 </div>
			  </div>
		   </div>
		   <!-- /BOTTOM -->
		</footer>
		
		
<!-- HTML -->
<a href="https://wa.me/<?=$Config_whatsapp_number;?>?text=I want to request service" class="whatsapp-button" target="_blank">
  <img src="vl_img/wp400.gif">
</a>

<!-- CSS -->
<style>

</style>


<script>
const faders = document.querySelectorAll('.fade-on-scroll');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.classList.add('active');
    }
  });
}, { threshold: 0.2 }); // triggers when 20% visible

faders.forEach(el => observer.observe(el));
</script>