<?php
   
   $host        = "host = ec2-52-73-213-161.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d6j1bk6en4rbf0";
   $credentials = "user = ncxgxfhqlrypnf password= ba2d16e7b5efb523d226e748c876ba6c3a5d55b9baa8a5531d14e8c275229c80 ";

   $db = pg_connect( "$host $port $dbname $credentials"  );

$sql ="CREATE TABLE logind (USERNAME CHAR(100) , EMAIL TEXT  NOT NULL UNIQUE Primary Key, PASSWORD TEXT, N TEXT, FRM TEXT, TOO TEXT, BYE TEXT, DA DATE,agency TEXT);";
pg_query($db,$sql);


   pg_close($db);
include_once("Homepage.html");

?>
