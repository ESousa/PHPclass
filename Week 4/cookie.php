<!DOCTYPE html>

<html>
    <head>
         <meta charset="UTF-8">
             <title></title>
         </head>
    <body>
        
 <?php
        
        
    setcookie("lastvist", date("m/d/y"), time()+60*60*24*30);
        
       
 echo $_COOKIE["lastvist"], "<br/>";
        
        
    $_COOKIE[sha1("username")] = sha1("Esousa");
        
        
        
 print_r($_COOKIE);
 
 ?>
        
        
    </body>
</html>