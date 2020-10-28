<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('userinfo.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }


    $username=$_REQUEST['username']; 
    $email=$_REQUEST['email']; 
    $password=$_REQUEST['password']; 


   $sql =<<<EOF
      INSERT INTO LOGINDDETAILS (USERNAME,EMAIL,PASSWORD)
      VALUES ($username', '$email', '$password' );

      
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
    echo $db->lastErrorMsg();
   } else {
     echo "Records created successfully\n";
   }
   $db->close();
?>