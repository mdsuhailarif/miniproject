<?php
session_start();

   $host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcjrfn9ert59om";
   $credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   $db = pg_connect( "$host $port $dbname $credentials"  );
        
   /* Create a query statement */
   $qry = pg_query("SELECT * FROM logind WHERE email = '$_POST[email]' and password = md5('$_POST[password]')");
    $login_check = pg_num_rows($qry);

    if($login_check > 0)
    { header("location: signup.html?status=erro&message=Login Successful !"); }
    else 
    { header("location: dashboard.html?status=erro&message=Login Successful !"); } 

pg_close($db);
   
?>
