<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
            <title></title>
        </head>
    <body>
        
        
<?php
    session_start();
    session_regenerate_id();
    print_r($_GET);
    
    
if  ( empty($_SESSION["isLoggedIn"] ) ){
      header("Location:login.php");
      
      }
      
       /*
         * Have user logout
         * use $_GET super global
         * destroy the session and send to login page
         */
      
if( count($_GET) && $_GET["logout"] == 1){
     session_destroy();
     header("Location:login.php");
     
            }      
?>
        
  <a href='login.php?logout=1'>Logout</a>
        
        </body>
    
</html>