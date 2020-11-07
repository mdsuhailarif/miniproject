<?php

	include_once("connect.php");
        	$sql ="INSERT INTO logind VALUES ('$_POST[username]','$_POST[email]',md5('$_POST[password]'))";

   		$ret = pg_query( $sql);
   		if(!$ret) {
   		   echo "This E-Mail is already registered";
   		} 
		 else {
   		   header("location: signup.html ");
   		}

   		pg_close($db);

?>

  
