<?php
   include("connect.php");
   
   $db = pg_connect( "$host $port $dbname $credentials"  );

$sql =<<<EOF
   CREATE TABLE logind (USERNAME CHAR(100) , EMAIL TEXT  NOT NULL UNIQUE Primary Key, PASSWORD TEXT, N TEXT, FRM TEXT, TOO TEXT, BYE TEXT, DA DATE,agency TEXT); 
EOF;



   pg_close($db);
include_once("Homepage.html");

?>
