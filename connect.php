<?php

		$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = dcjrfn9ert59om";
   		$credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   		$db = pg_connect( "$host $port $dbname $credentials");

 
			$create ="CREATE TABLE logind ( username TEXT NOT NULL, email TEXT NOT NULL UNIQUE,password TEXT NOT NULL );)";
			
			$ret = pg_query($create);
			
        	//$sql ="INSERT INTO logind VALUES ('$_POST[username]','$_POST[email]',md5('$_POST[password]'))";
		
   		if(!$ret) {
   		$message = "Email is already registered.\\nTry again.";
                echo "<script type='text/javascript'>alert('$message');</script>";
                include_once("signup.html");
   		} 
		 else {
   		   header("location: signup.html ");
   		}

   		pg_close($db);

?>

  
