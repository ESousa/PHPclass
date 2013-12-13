<?php include 'dependency.php'; ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>My Guestbook</title>
    </head>
    <body>
        
        
 <?php
 
        // put your code here
        Login::confirmAccess();
        
        $gb = new Guestbook();
        
        if(! $gb->processGuestbook()){
            echo "error\t ";
        }
        $gb->displayGuestbook();        
        ?>
        
        
        
        <div id="form">
        <form action="#" method="post">
             Name: <input type="text" name="name" value=""/> 
            <br />           
            Email: <input type="text" name="email" value=""/> 
            <br />    
            Comments: <input type="text" name="comments" value=""/> 
            <br /> 
            <input  type="submit"  value="Submit"/>
        </form>
        </div>
        <style>
        
        
            body{
                text-align:center;
                color: whitesmoke;
                background-color:black;
            }
            
            input{
                color: whitesmoke;
                background-color: black;
            }
            
            
        </style>
    </body>
</html>
