<?php

		$host        = "host = ec2-52-73-213-161.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = d6j1bk6en4rbf0";
   		$credentials = "user = ncxgxfhqlrypnf password=ba2d16e7b5efb523d226e748c876ba6c3a5d55b9baa8a5531d14e8c275229c80";

   		$db = pg_connect( "$host $port $dbname $credentials");

						
        $sql ="INSERT INTO logind VALUES ('$_POST[username]','$_POST[email]',md5('$_POST[password]'))";
		$ret = pg_query($sql);
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

  
