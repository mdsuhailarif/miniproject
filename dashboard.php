<?php
session_start();
$email_address= $_SESSION['email'];
if(empty($email_address))
{
  header("location:signup.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--custom style-->
  <style type="text/css">
    *{
      margin:0px;
      padding:0px;
    }
   .header{
      background: #ff8100;
      
    }
     .header h1{
       text-align: center;
    color: white;
    margin: 0px;
    padding: 25px 0px;
    font-size: 40px;
            
    }
    .user-box{
      text-align: center;
    }
    .user-detail{
      width: 30%;
    min-height: 100px;
    display: inline-block;
    background: #e8e8e8;
    margin: 50px;
    padding: 10px;
    }
    .user-detail p{
      font-size:25px;
    }
    .user-detail h3{
      font-size: 30px;
    line-height: 100px;
    color: #ff8100;
    }
    .header a{
      float: right;
    position: relative;
    right: 60px;
    top: 10px;
    background: white;
    text-decoration: none;
    padding: 5px 20px;
    font-size: 25px;
    color: black;
    }
  </style>
</head>
<body>
<div class="header">
<h1>Welcome to Dashboard  <a href="logout.php">Logout</a></h1>
</div>
<div class="user-box">
    <div class="user-detail">
      <p>Your Email Address</p>
      <h3>
      <?php 
        echo $email_address;
      ?>
    </h3>
    </div>
  </div>
</body>
</html>
