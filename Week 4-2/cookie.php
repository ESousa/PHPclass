<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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
        
 setcookie("lastvisit", date("m/d/Y"), time()-8980);       
        
 print_r($_COOKIE);
 
 ?>
        
        
    </body>
</html>