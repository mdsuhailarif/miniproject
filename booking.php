<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bookings-TuriGo India</title>
  <link rel="stylesheet" href="css/styles_bookings.css">
 <link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/style3.css" type="text/css" media="all" > <!-- Style-CSS --> 



  <!-- Font-awesome -->
  <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>

  <!-- icon -->
  <link rel="icon" href="icon_1.png">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">

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
						<h1><a href="dashboard.html"><img src="images/logo.png" alt="logo" height="100"></a></h1>
					</div>

					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="hvr-underline-from-center active" href="dashboard.html">Home</a></li>
							<li><a href="services.html" class="hvr-underline-from-center">Services</a></li>
							<li><a href="gallery.html" class="hvr-underline-from-center">Gallery</a></li>
							<li><a href="contact.html" class="hvr-underline-from-center">Contact Us</a></li>
							<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
							
						</ul>
					</div>

					<div class="clearfix"> </div>	
		</nav>
	
</div>

<div class="bg">

      <!-- Title -->
	<div class=title">
      <div class="row">
        <div class="col-lg-6 First-sec">
          <h1 class="main-text">Availiable Transports.</h1>
          <p>Scoll down to check out the transport services near you, select then proceed.</p>
          <a href="http://turigo.herokuapp.com/dashboard.html"><button type="button" class="btn btn-danger btn-lg download-button"><i class="fa fa-home" aria-hidden="true"></i> Home</button></a>
        <a href="#features"><button type="button" class="btn btn-outline-danger btn-lg download-button" ><i class="fa fa-car" aria-hidden="true"></i> Availiable Bookings</button></a>
          
          
        </div>
        <div class="col-lg-6 ">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/bb1.png" class="images-slider" alt="...">
                <em>TuriGo India services.</em>
              </div>
              <div class="carousel-item">
                <img src="images/bb2.png" class="images-slider" alt="...">
                <em>TuriGo India services.</em>
              </div>
              <div class="carousel-item">
                <img src="images/bb4.png" class="images-slider" alt="...">
                <em>TuriGo India services.</em>
              </div>
              <div class="carousel-item">
                <img src="images/bb6.png" class="images-slider" alt="...">
                <em>TuriGo India services.</em>
              </div>
              <div class="carousel-item">
                <img src="images/bb5.png" class="images-slider" alt="...">
                <em>TuriGo India services.</em>
              </div>
            </div>
          </div>
        </div>
  </div>
  </div>

  <!-- Services -->

  <section id="features" class="white-section">
        <div class="discount-offers">
           <em>Best offers with great deals</em>
          <img src="images/offers.png" height="150px">
          <em>Republic Day special</em>
          <img src="images/discount.png" height="150px">
        <table class="table table-dark">
        <thead>
         <tr>
          <th scope="col">S.NO.</th>
          <th scope="col">Service Provider</th>
          <th scope="col">Ratings</th>
          <th scope="col">Confirm Booking</th>
        </tr>
      </thead>
	  
	  <form action="#" method="Post">
      <tbody>
        <tr>

          <th scope="row">1</th>
          <td>Yash Travels</td>
          <td>🌟🌟🌟🌟</td>
          <td><a href="#cta"><button type="button" onClick="agency(1)"  class="btn btn-outline-success btn-lg download-button">Proceed</button></a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Noida Specials</td>
          <td>🌟🌟🌟</td>
          <td><a href="#cta"><button type="button" onClick="agency(2)"  class="btn btn-outline-success btn-lg download-button">Proceed</button></a></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Travel point</td>
          <td>🌟🌟🌟</td>
         <td><a href="#cta"><button type="button" onClick="agency(3)" class="btn btn-outline-success btn-lg download-button">Proceed</button></a></td>
        </tr>
         <tr>
          <th scope="row">3</th>
          <td>Balaji Travels</td>
          <td>🌟🌟🌟</td>
          <td><a href="#cta"><button type="button" onClick="agency(4)" class="btn btn-outline-success btn-lg download-button">Proceed</button></a></td>
        </tr>
         <tr>
          <th scope="row">3</th>
          <td>Star Tour and Travels</td>
          <td>🌟🌟</td>
          <td><a href="#cta"><button type="button" onClick="agency(5)" class="btn btn-outline-success btn-lg download-button">Proceed</button></a></td>
        </tr>
      </tbody>
	  </form>
    </table>
	</div>
</section>
  

		<?php

function agency($a){
	if($a==1)
	{$agency ="Yash Travels";}
	elseif($a==2)
	{$agency="Noida Specials";}
	elseif($a==3)
	{$agency="Travel point";}
	elseif($a==4)
	{$agency="Balaji Travels";}
	else($a==5)
	{$agency="Star Tour and Travels";}
}
		include_once("book.php");				
        $sql =<<<EOF
		UPDATE logind SET agency='$agency' WHERE email='$_POST[email]';
EOF;
		$ret = pg_query($sql);
   		
   		pg_close($db);
?>

  <!-- Payment -->

  <section id="cta" class="coloured-section">

    <h3 class="main-text">Confirm your Booking</h3>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Username</th>
          <th scope="col">Date</th>
          <th scope="col">From</th>
          <th scope="col">To</th>
          <th scope="col">Service Provider</th>
        </tr>
      </thead>
      <tbody>
	  <?php
include_once("book.php");

   /* Create a query statement */	
$qry = pg_query($db,"SELECT * FROM logind WHERE email = '$email'");
$row= pg_fetch_row($qry);
while ($row = pg_fetch_row($rs))  	
			 { echo "<tr><th>"; echo "$row[0]"; echo "</th> <td>"; echo "$row[1]"; echo "</td> <td>"; echo"$row[2]"; echo"</td></tr>"; }
		 
pg_close($db);		 

?>
      </tbody>
    </table>
    <p>The pre-booking amount is non-refundable.</p>
    <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_GTVAXGYgLLiTyK" async> </script> </form>
    

  </section>


<!-- footer -->
<footer id = "footer">
		<div class="agileits-w3layouts-footer">
			<div class="row">
				<div class="col-md-4 w3-agile-grid">
				</div>
				<div class="col-md-4 w3-agile-grid">
				<h3>Contact Us</h3>
					<div class="footer-agileinfo-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
					<br>
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
				                        <h6>Phone no.</h6><p>+91 18008899999</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="w3-address-right">
								<h6>Email Address</h6>
								<p>Email :<a href="mailto:example@email.com"> contact@turigoindia.com</a></p>
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
	</footer>
	<!-- //footer -->
  <!-- //footer -->
<div class="copyright">
      <div class="container">
        <p>© 2020 Turigo. All rights reserved </p>
      </div>
    </div>

</div>


</html>

