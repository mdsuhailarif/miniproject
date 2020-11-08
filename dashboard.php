
<?php session_start(); if (!isset($_SESSION['user'])){ header("location: signup.html")} ?> 

<!DOCTYPE html>
<html lang="en">
<head>
<title>Turigo</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--// Meta tag Keywords -->

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style3.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
<div class="header">
		<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style= "opacity:0.3;">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="Homepage.html"><img src="images/logo.png" alt="logo" height="100"></a></h1>
					</div>
					<div class="top-nav-text">
						<div class="nav-contact-w3ls"><p><i class="fa fa-user" aria-hidden="true"></i> &nbsp Welcome!  <?php session_start();  echo $_SESSION['email'];   ?>
							 </p>
						</div> 
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="hvr-underline-from-center active" href="dashboard.html">Home</a></li>
							<li><a href="services.html" class="hvr-underline-from-center">Services</a></li>
							<li><a href="gallery.html" class="hvr-underline-from-center">Gallery</a></li>
							<li><a href="contact.html" class="hvr-underline-from-center">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
							
						</ul>
					</div>

					<div class="clearfix"> </div>	
				</nav>
	
	</div>
<!-- Slider -->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h2>Auto transport to fill</h2>
								<h4>the truck space</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="banner-form-agileinfo">
									<h5>Need To <span>Transport</span>?</h5>
									<p>Enter Details</p>
									<form action="#" method="post">
										<input type="text" class="email" name="name" placeholder="Name" required="">
										<input type="tel" class="tel" name="tel" placeholder="Phone Number" required="">
										<select class="form-control option-w3ls">
												<option>Transport From</option>
												<option>Agra</option>
												<option>Aligarh</option>
												<option>New Delhi</option>
												<option>Noida</option>
												<option>Gurugram</option>
												<option>Jaipur</option>
										</select>
										<select class="form-control option-w3ls">
												<option>Transport To</option>
												<option>Agra</option>
												<option>Aligarh</option>
												<option>New Delhi</option>
												<option>Noida</option>
												<option>Gurugram</option>
												<option>Jaipur</option>
										</select>
										<input type="submit" class="hvr-shutter-in-vertical" value="Get started">  	
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</li>
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top2">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h3>vehicles Transport</h3>
								<h4>Huge in collection</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="banner-form-agileinfo">
									<h5>Need To <span>Transport</span>?</h5>
									<p>Enter Details</p>
									<form action="#" method="post">
										<input type="text" class="email" name="name" placeholder="Name" required="">
										<input type="tel" class="tel" name="tel" placeholder="Phone Number" required="">
										<select class="form-control option-w3ls">
												<option>Transport From</option>
												<option>Agra</option>
												<option>Aligarh</option>
												<option>New Delhi</option>
												<option>Noida</option>
												<option>Gurugram</option>
												<option>Jaipur</option>
										</select>
										<select class="form-control option-w3ls">
												<option>Transport To</option>
												<option>Agra</option>
												<option>Aligarh</option>
												<option>New Delhi</option>
												<option>Noida</option>
												<option>Gurugram</option>
												<option>Jaipur</option>
										</select>
										<input type="submit" class="hvr-shutter-in-vertical" value="Get started">  	
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</li>
			
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top4">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h3>Goods Carrying Train</h3>
								<h4>Truck shipping</h4>
								<div class="w3ls-button">
									<a href="#" data-toggle="modal" data-target="#myModal">More About Our Transport</a>
								</div>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="banner-form-agileinfo">
									<h5>Need To <span>Transport</span>?</h5>
									<p>Enter Details</p>
									<form action="#" method="post">
										<input type="text" class="email" name="name" placeholder="Name" required="">
										<input type="tel" class="tel" name="tel" placeholder="Phone Number" required="">
										<select class="form-control option-w3ls">
												<option>Transport From</option>
												<option>Agra</option>
												<option>Aligarh</option>
												<option>New Delhi</option>
												<option>Noida</option>
												<option>Gurugram</option>
												<option>Jaipur</option>
										</select>
										<select class="form-control option-w3ls">
												<option>Transport To</option>
												<option>Agra</option>
												<option>Aligarh</option>
												<option>New Delhi</option>
												<option>Noida</option>
												<option>Gurugram</option>
												<option>Jaipur</option>
										</select>
										<input type="submit" class="hvr-shutter-in-vertical" value="Get started">  	
									</form>
								</div>
							</div>
						</div>
					</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //Slider -->				
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Transporters
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/bg3.jpg" alt=" " class="img-responsive" />
						<p>We are here to provide you transport services
							<i> join us now !</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="col-md-7 bannerbottomleft">
			<div class="video-grid-single-page-agileits">
				<div data-video="d3q5mRA5djY" id="video"> <img src="images/bg2.jpg" alt="" class="img-responsive" /> </div>
			</div>
	</div>
	<div class="col-md-5 bannerbottomright">
		<h3>How Does We Work?</h3>
		<p></p>
		<h4><i class="fa fa-taxi" aria-hidden="true"></i>International Transport Deliver System</h4>
		<h4><i class="fa fa-shield" aria-hidden="true"></i>Fast & Best Deliver Service</h4>
		<h4><i class="fa fa-ticket" aria-hidden="true"></i>Standard Courier value</h4>
		<h4><i class="fa fa-space-shuttle" aria-hidden="true"></i>Easy And Auto Shipping Service</h4>
		<h4><i class="fa fa-truck" aria-hidden="true"></i>Packaging & Storage</h4>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->


<!-- Clients -->
	<div class=" col-md-6 clients">
			<h3>Testimonials</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
								<div class="client">
									<img src="images/t1.jpg" alt="" />
									<h5>Brian Fantana</h5>
									<div class="clearfix"> </div>
								</div>
								<p>Best packers and movers in Jodhpur. They have professional people for door to door delivery. I did not paid extra charges for the delivery of the items. and my car safely reach to me. Thanks for that.</p>
								
						</li>
						<li>	
								<div class="client">
								<img src="images/t2.jpg" alt="" />
									<h5>Brick Tamland</h5>
									<div class="clearfix"> </div>
								</div>
								<p>I contacted Auto Turigo about picking up a car and transporting it to my home.I was treated to a very excellent and well organized transaction. If I ever need another move, I will use this company again.</p>
								
						</li>
						<li>
								<div class="client">
								<img src="images/t3.jpg" alt="" />
									<h5>Ron Burgundy</h5>
									<div class="clearfix"> </div>
								</div>
								<p>car relocation services are very good, they picked up the car on 12rd march 2020 and deliver on 30st March 2020 at my location. Thanks for your best service.</p>
								
						</li>
						<li>
								<div class="client">
								<img src="images/t4.jpg" alt="" />
									<h5>Arturo Mendez</h5>
									<div class="clearfix"> </div>
								</div>
								<p>Driver was right on time for pickup. He took great care to ensure car was secure. Delivered it right on time and in great shape. Would definitely use them again.</p>
								
						</li>
					</ul>
				</div>
			</section>
</div>
<!-- //Clients -->
<!-- Counter -->
	<div class="col-md-6 services-bottom">
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">1126</p> 
					<h3>Transport vehicles</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-fighter-jet" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">180</p> 
					<h3>International Service</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-calendar" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">20</p>
					<h3>Years Of Service</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 agileits_w3layouts_about_counter_left">
				<div class="countericon">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<div class="counterinfo">
					<p class="counter">800</p>
					<h3>Happy clients</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
	</div>
			<div class="clearfix"> </div>
<!-- //Counter -->


<!-- footer -->
	<footer>
		<div class="agileits-w3layouts-footer">
			<div class="container">
				<div class="col-md-4 w3-agile-grid">
					<h5>About Us</h5>
					<p>We are India based transpot company.</p>
					<div class="footer-agileinfo-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				
				<div class="col-md-4 w3-agile-grid">
					<h5>Address</h5>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
				
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Location</h6>
								<p> New Delhi
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<p>© 2020 Turigo. All rights reserved </p>
			</div>
		</div>
	</footer>
	<!-- //footer -->



<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->

<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager:false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
<!-- //Baneer-js -->

<!-- banner bottom video script -->
<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
</script>
<!-- //banner bottom video script -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 
				<script src="js/counterup.min.js"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 100,
							time: 1000
						});
					});
				</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->


<!-- FlexSlider-JavaScript -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(function(){
			SyntaxHighlighter.all();
				});
				$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
			});
		});
	</script>
<!-- //FlexSlider-JavaScript -->

<!-- //js-scripts -->
</body>

</html>
