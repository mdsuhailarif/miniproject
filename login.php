<?php
session_start();

<<<<<<< HEAD
   $host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = dcjrfn9ert59om";
   		$credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   		$db = pg_connect( "$host $port $dbname $credentials");

	
   $db = pg_connect( "$host $port $dbname $credentials"  );
=======
   include("connect.php");
>>>>>>> 2edf520c10bff7b9dc2d1389fc1dcd4b11e68176

   /* Create a query statement */
   $qry = pg_query($db,"SELECT * FROM logind WHERE email = '$_POST[email]' and password = md5('$_POST[password]') ");
   $row= pg_num_rows($qry);
$_SESSION['user']= $_POST[username];
    if($row > 0)
    { include_once("dashboard.html"); }
    else 
    { include_once("signup.html"); } 

pg_close($db);
?>
   
