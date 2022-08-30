<?php
session_start();
         $host        = "host = ec2-52-73-213-161.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = d6j1bk6en4rbf0";
   		$credentials = "user = ncxgxfhqlrypnf password=ba2d16e7b5efb523d226e748c876ba6c3a5d55b9baa8a5531d14e8c275229c80";
$db = pg_connect( "$host $port $dbname $credentials");

   /* Create a query statement */	
$qry = pg_query($db,"SELECT * FROM logind WHERE email = '$_POST[email]' and password = md5('$_POST[password]') ");
$row= pg_fetch_row($qry);
$_SESSION['user']= $row[0];
if($row > 0)
 {  header("location: dashboard.html"); }
else 
 { $message = "Email and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
include_once("signup.html"); }

pg_close($db);
?>


