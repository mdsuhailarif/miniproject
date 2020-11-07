<?php
session_start();

   include("connect.php");

   /* Create a query statement */
   $qry = pg_query($db,"SELECT * FROM logind WHERE email = '$_POST[email]' and password = md5('$_POST[password]') ");
   $row= pg_num_rows($qry);
$_SESSION['user']= $_POST[username];
    if($row > 0)
    { include_once("dashboard.html"); }
    else 
    { include_once("signup.html"); } 

pg_close($db);
?>
   
