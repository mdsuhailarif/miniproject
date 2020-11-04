<?php
session_start();
$email_address= $_SESSION['email'];
if(empty($email_address))
{
  header("location:signup.html");
}
?>

<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login and Registration Form with HTML5 and CSS3</title>
		<link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">


  <!-- Font-awesome -->
  <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>


  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </head>
    <body >
	 <section id="title">

    <!-- Nav Bar -->
    <div class="container-fluid">

          <nav class="navbar navbar-expand-lg navbar-dark ">

            <a href='index.html'>
			<img class="navbar-brand rounded-sm" src="images/logo.png" alt="my-logo" height="150" width="150"></a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="True" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="#footer">Contact</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#testimonials">Help</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="logout.php">Logout</a>
                      </li>

                  </ul>
                </div>
          </nav>
    </div>
  </section>
       <div class="header">
<h1>Welcome to Dashboard </h1>
</div>
<div class="user-box">
    <div class="user-detail">
      <?php 
        echo $email_address;
      ?>
    </div>
  </div>
   

 <!-- Testimonials -->

  <section id="testimonials">
    <!-- covid-safety steps -->
    <h2>Safety Steps.</h2>
    <img class="testi-image" src="images/sanitisation.jpg" alt="covid-safety" >
    <p class="testi-text">Use mask and maintain social distancing.</p>


    <!-- carousel-slider -->
    <h3 class="sevices-text"><i class="fa fa-heart" aria-hidden="true"></i>OUR SERVICES<i class="fa fa-heart" aria-hidden="true"></i></h3>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause = "hover">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">Book fully sanitised AC Buses with full safety and Discounts.</h2>
          <img class="testimonial-image" src="images/bus.png" alt="Bus-image">
          <em>Full AC,WIFI,Charging ports.</em>
        </div>
        <div class="carousel-item">
          <h2>Book Cabs at lowest price with comfortable rides</h2>
          <img src="images/cabs.jpg" class="testimonial-image" alt="Taxi">
          <em>Fully Ac cabs with WIFI and Jack</em>
        </div>
        <div class="carousel-item" >
          <h2>Want to shift home but need a transport Like: Truck.</h2>
          <img src="images/truck.png" class="testimonial-image" alt="truck">
          <em>Shift your home full safety of your house furniture.</em>
        </div>
        <div class="carousel-item">
          <h2>We have promised you to provide you comfort.</h2>
          <img src="images/lady.jpg" class="testimonial image" alt="lady">
          <em>Book now to avial first free rides and exiting offers.</em>
        </div>
        <div class="carousel-item">
          <h2>We are growing our network day by day.</h2>
          <img src="images/network.jpg" class="testimonial-image" alt="network">
          <em>Our network growing very fast to give you more comfort.</em>
        </div>
	  <div class="carousel-item" >
          <h2 class="testimonial-text">Our users.</h2>
          <img src="images/cab.jpg" class="testimonial-image" alt="cab-driver">
          <em>I belived in TuriGo.</em>
        </div>
        <div class="carousel-item" >
          <h2 class="testimonial-text">Our users.</h2>
          <img src="images/lady_cab.jpg" class="testimonial-image" alt="cab-driver">
          <em>I belived in TuriGo.</em>
        </div>
        <div class="carousel-item" >
          <h2 class="testimonial-text">Our Customer.</h2>
          <img src="images/thanks.jpg" class="testimonial-image" alt="girl">
          <em>I belived in TuriGo,found safe rides with discounts.</em>
        </div>

      </div>
    </div>



  </section>

  </section>


  <!-- Footer -->

  <footer id="footer">


    <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
    <i class="social-icon fa fa-facebook-square" aria-hidden="true"></i>
    <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
    <i class="social-icon fa fa-envelope" aria-hidden="true"></i>
    <p>© Copyright 2020 TouriGo India</p>

  </footer>

    </body>

</html>
