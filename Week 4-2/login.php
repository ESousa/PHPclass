

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
        <body>
            
            
 <?php
        // put your code here
        session_start();
        session_regenerate_id(true);
        
        include "Config.php";
        include "Validator.php";
        
        $token = uniqid() ;
        
        if( !isset($_SESSION["token"])){
            $_SESSION["token"] = $token;
        }else{
           if(isset($_POST["token"]) && $_SESSION["token"] != $_POST["token"]){
               session_destroy();
               header("Location:login.php");
               exit();
           }
        }
        
        if(!empty($_POST["email"])){
            $_SESSION["wait"] = time() + Config::MAX_SESSION_TIME;
        }
        
        if(isset($_SESSION["wait"]) && $_SESSION["wait"] > (time() - Config::MAX_SESSION_TIME )){
            //$_SESSION["wait"] = time() + Config::MAX_SESSION_TIME;
            echo "Please come back";
            exit();
        }
        
        
        $_SESSION["token"]= $token;
        
        $username = (isset($_POST["username"]) ? $_POST["username"] : "" );

        $password= (isset($_POST["password"]) ? $_POST["password"] : "" );
           
if(!empty($username) 
    && !empty($password)
    && Validator::loginIsValid($username, $password)
 ){
    
 $_SESSION["isLoggedIn"]=true;
 header("Location:admin.php");
 
 }
     else 
 {
                
     echo "<p>Username or password is not correct</p>";
 }
           
           ?>
        
        <form name="mainform" action="login.php" method="post">
             
         Username: <input type="text" name="username"   /><br />
         Password: <input type ="text" name="password" /><br />
         <input type="hidden" name="token" value="<?php echo $token; ?>" />
         <input type="hidden" name="email" value="" />
         <input type ="submit" value="Submit" />
        </form>
    </body>
</html>