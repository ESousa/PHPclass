
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
        include 'Config.php';
        
        
        if (!isset($_SESSION["counter"])){
        $_SESSION["counter"]= 0;
        }else{
           $_SESSION["counter"]++;
        }
        
        //new page load old session deleted
        session_regenerate_id(true);
        
        
        echo session_id(),"<br />";
        echo $_SESSION["counter"];
        
        if (isset($_SESSION["maxlife"]) && $_SESSION["maxlife"] > (time() - Config::MAX_SESSION_TIME )){
            echo "Sorry your timed out";
        }else{
            $_SESSION["maxlife"] = (time() + Config::MAX_SESSION_TIME); 
        }
       /*
        $_SESSION["maxlife"]= time();
        echo $_SESSION["maxlife"];
        unset($_SESSION["maxlife"]);
        echo $_SESSION["maxlife"];
        
        //destroys seession after your done with the page 
        session_destroy();
        * 
        */
        ?>
    </body>
</html>