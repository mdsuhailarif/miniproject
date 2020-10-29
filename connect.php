<?php
	 if($_POST){      
        $db = new PDO('sqlite:userinfo.db');
        
        /* inserting into database */
        $stmt = $db -> prepare("INSERT INTO logind (USERNAME, EMAIL, PASSWORD) VALUES (:USERNAME, :EMAIL, :PASSWORD)");
        
        /* bind params */
        $stmt -> bindParam(':USERNAME', $_POST['username'], PDO::PARAM_STR);
        $stmt -> bindParam(':EMAIL',$_POST['email'], PDO::PARAM_STR);
        $stmt -> bindParam(':PASSWORD',$_POST['password'], PDO::PARAM_STR);
        
        /* execute the query */
        if( $stmt -> execute() ){
         header("location: 'signup.html' ");
		 exit;
        }
        
        /* close connection */
        $db = null;
    }
?>

<script>
     window.location.href = 'signup.html';
    </script>	
  