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