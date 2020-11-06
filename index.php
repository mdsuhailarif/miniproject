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

$query = "SELECT * FROM cars logind"; 

$rs = pg_query($db, $query);
if(!$rs)
{ echo "failed";}

while ($row = pg_fetch_row($rs)) {
  echo "$row[0] $row[1] $row[2]\n";
}
 
$ret = pg_query($db, $sql);
   pg_close($db);
include_once("Homepage.html");

?>
