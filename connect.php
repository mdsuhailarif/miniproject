<?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);

		$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = dcjrfn9ert59om";
   		$credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   		$db = pg_connect( "$host $port $dbname $credentials");

	 if(isset($_POST["Signup"])){      
		$uname = $_POST['username'];
		$email = $_POST['email'];
		$passwrd = $_POST['password'];
        
        	$sql =<<<EOF
      			INSERT INTO logind (USERNAME,EMAIL,PASSWORD)
      			VALUES ('".$uname."','".$email."','".$passwrd."');
		 EOF;

   		$ret = pg_query($db, $sql);
   		if(!$ret) {
   		   echo "ERROR";
   		} 
		 else {
   		   echo "Records created successfully\n";
   		}
   		pg_close($db);
		 
?>

  
