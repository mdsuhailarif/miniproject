<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Payment-TuriGo India</title>
  <link rel="stylesheet" href="css/styles_bookings.css">

  <!-- Font-awesome -->
  <script src="https://use.fontawesome.com/07d62e5a9f.js"></script>

  <!-- icon -->
  <link rel="icon" href="icon_1.png">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>


</head>

<body>

  <section id="title">

    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="http://turigo.herokuapp.com/dashboard.html">TuriGo India</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://turigo.herokuapp.com/dashboard.html">Home <span
                class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://turigo.herokuapp.com/book.php#cta">Manage Booking</a>
          </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

  </section>


  <!-- Services -->

  <section id="payment_sec">
    <div class="payment">
      <h1>Confirm your payment</h1>
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
          <tr>
            <th scope="row">Kundan kumar</th>
            <td>29 jan 2021</td>
            <td>Noida</td>
            <td>Jaipur</td>
            <td>Travel Point</td>
          </tr>
          <tr>
          <?php	
          $host        = "host = ec2-52-73-213-161.compute-1.amazonaws.com";
          $port        = "port = 5432";
          $dbname      = "dbname = d6j1bk6en4rbf0";
          $credentials = "user = ncxgxfhqlrypnf password=ba2d16e7b5efb523d226e748c876ba6c3a5d55b9baa8a5531d14e8c275229c80";
          $db = pg_connect( "$host $port $dbname $credentials"  );	
          $query = "SELECT * FROM logind"; 
          $sql ="UPDATE logind SET agency='$_POST[agency]' WHERE email='$_POST[email]'";	
          $rs = pg_query($db, $query);	
          if(!$rs)	
          { echo "failed";}
          while ($row = pg_fetch_array($rs)){ 	
            echo 
            '<td>'.$row[0].'</td>
              <td>'.$row[1].'</td>
              <td>'.$row[2].'</td>'; 
            }
            pg_close($db);	
            ?>
            </tr>
        </tbody>
      </table>


    </div>

    <div class="payment_options row">
      <div class="card col-lg-6" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Pre-Booking Amount</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pay 20% of total payment.</h6>
          <p class="card-text">The pre-booking amount is not refundable during cancellations.</p>
          <a href="https://rzp.io/l/9CQOIWo9am"><button type="button" class="btn btn-success">Pay now</button></a>
        </div>
      </div>
      <div class="card col-lg-6" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Full Payment</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pay full payment.</h6>
          <p class="card-text">Make full payment once get exting cash-backs and shopping coupons.</p>
          <a href="https://rzp.io/l/Oddf4IjSQ8"><button type="button" class=" btn-outline btn-success">Pay
              now</button></a>
        </div>

      </div>
    </div>
  </section>

  <!-- Payment -->






  <div class="copyright">
    <div class="container">
      <p>© 2020 TuriGo. All rights reserved </p>
    </div>
  </div>

  </div>