<?php

$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dcjrfn9ert59om";
   $credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   $db = pg_connect( "$host $port $dbname $credentials"  );
 if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   };
        
        /* Create a prepared statement */
        $stmt = "SELECT password from logind where username= '$_POST[username]' or email = '$_POST[username]' ");
        
        /* execute the query */
        pg_query($db,$stmt);
              
        /* fetch all results */ 		
	     $res = pg_fetch_assoc($stmt);
             $res= implode(" ",$res);
             if($res==$_POST[password])
		{
		 header("location: dashboard.html ");}
		 else{
			 echo "Login failed! Try again.";
		 }	 
		 
        /* close connection */
        
}	
?>
