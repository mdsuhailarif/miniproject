<?php
$host = "ec2-54-224-175-142.compute-1.amazonaws.com";
$dbname = "dcjrfn9ert59om";
$user = "tgfotlqsesxkop";
$password = "8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";
$port = "5432";

$dsn = "pgsql:host=$host;dbname=$dbname;user=$user;port=$port;password=$password";

$db = new PDO($dsn);

if($db){
  echo "Connected <br />".$db;
}else {
  echo "Not connected";
}



include_once("Homepage.html");

?>
