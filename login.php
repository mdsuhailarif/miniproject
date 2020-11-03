<?php

   $host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcjrfn9ert59om";
   $credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   $db = pg_connect( "$host $port $dbname $credentials"  );
        
        /* Create a query statement */
   $qry = pg_query($db, "SELECT * FROM logind WHERE username = '$_POST[username]' and password = '$_POST[password]';);
    $login_check = pg_num_rows($qry);
    if($login_check > 0){ {
      echo "Login Failed ! "; }
      else {
      header(location: "daashborad.html");
      } 
   
?>
