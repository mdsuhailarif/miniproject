<?php
$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcjrfn9ert59om";
   $credentials = "user = tgfotlqsesxkop password= 8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276 ";

   $db = pg_connect( "$host $port $dbname $credentials"  );

$sql =<<<EOF
   CREATE TABLE IF NOT EXISTS logind
   (USERNAME CHAR(100) ,
    EMAIL TEXT  NOT NULL UNIQUE Primary Key,
    PASSWORD TEXT); 
EOF;

$sqlo =<<<EOF
   CREATE TABLE IF NOT EXISTS booking
   (USERNAME CHAR(100) ,
    NO TEXT  NOT NULL UNIQUE Primary Key,
    FROM TEXT, TO TEXT,BY TEXT,D DATE); 
EOF;

ret= pg_query($sqlo);

   pg_close($db);
include_once("Homepage.html");

?>
