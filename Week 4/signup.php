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
        
        if(!empty($errorMsg)){
            echo "<p>",$errorMsg,"</p>";
        }
        if(!empty($sucessMsg)){
            echo "<p>",$sucessMsg,"</p>";
        }
        
?>
        
        
        <form name="mainform" action="signupprocess.php" method="post">
         Email: <input type="text" name="email" /><br />
         Username: <input type="text" name="username" /><br />
         Password: <input type ="text" name="password" /><br />
         <input type ="submit" value="Submit" />
        </form>
        
    </body>
</html>