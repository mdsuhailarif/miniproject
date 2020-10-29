<?php

if( $_POST ){
	
	$id = $_POST[ 'username' ];
        
    $db = new PDO('sqlite:userinfo.db');
        
        /* Create a prepared statement */
        $stmt = $db -> query("SELECT password from logind where username= :id or email = :id ");
 
        /* bind param */
        $stmt -> bindParam(':id', $id, PDO::PARAM_STR);
        
        /* execute the query */
        $stmt -> execute();        
        /* fetch all results */ 		
	     $res = $stmt->fetch(\PDO::FETCH_ASSOC);
            $res= implode(" ",$res);
		 if($res==$_POST['password']){
		 header("location: dashboard.html ");}
		 else{
		 echo "login failed";}	 
		 
        /* close connection */
        $db = null;
}	
?>