<?php
PASS: ${{ secrets.DB_PASS }}
$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcjrfn9ert59om";
   $credentials = "user = tgfotlqsesxkop password= getenv($PASS) ";

   $db = pg_connect( "$host $port $dbname $credentials"  );
if($db)
{ echo "sucsess";}
else
{echo "Failed" }
   

$sql =<<<EOF
   CREATE TABLE IF NOT EXISTS logind
   (USERNAME CHAR(100) ,
    EMAIL TEXT  NOT NULL UNIQUE Primary Key,
    PASSWORD TEXT); 
EOF;
 
$ret = pg_query($db, $sql);
   pg_close($db); 
include_once("Homepage.html");

?>
