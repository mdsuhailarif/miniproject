<?php

		$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = dcjrfn9ert59om";
   		$credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   		$db = pg_connect( "$host $port $dbname $credentials");

						
        $sql ="UPDATE logind SET n='$_POST[no]',frm='$_POST[frm]',too='$_POST[too]',bye='$_POST[bye]',da='$_POST[da]' WHERE email='$_POST[email]'";
		$ret = pg_query($sql);
   		if(!$ret) {
   		$message = "Invalid Details!.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                include_once("dashboard.php");
   		} 
		 else {
   		   header("location: booking.php ");
   		}

   		pg_close($db);
?>