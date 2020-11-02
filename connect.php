<?php
	 if($_POST){      
       		# This function reads your DATABASE_URL config var and returns a connection
		function pg_connection_string_from_database_url() {
 		extract(parse_url($_ENV["postgres://tgfotlqsesxkop:8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276@ec2-54-224-175-142.compute-1.amazonaws.com:5432/dcjrfn9ert59om"]));
  		return "user=$user password=$pass host=$host dbname=" . substr($path, 1); 
		}

		# Here we establish the connection
		$db = pg_connect(pg_connection_string_from_database_url());
        
        /* inserting into database */
        $stmt = $db -> prepare("INSERT INTO logind (USERNAME, EMAIL, PASSWORD) VALUES (:USERNAME, :EMAIL, :PASSWORD)");
        
        /* bind params */
        $stmt -> bindParam(':USERNAME', $_POST['username'], PDO::PARAM_STR);
        $stmt -> bindParam(':EMAIL',$_POST['email'], PDO::PARAM_STR);
        $stmt -> bindParam(':PASSWORD',$_POST['password'], PDO::PARAM_STR);
        
        /* execute the query */
       $ret = pg_query($db, $stmt);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
    }
?>

<script>
     window.location.href = 'signup.html';
    </script>	
  
