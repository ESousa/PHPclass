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
        
        $dbh = new PDO("mysql:host=localhost;port=3306;dbname=testdb","root","");
        
       // $stmt = $dbh->prepare('insert into week2 set fullname = "test", email = "test@test.com", comments = "commtents added"');
         //$stmt->execute();
         $stmt = $dbh->prepare('SELECT * FROM week2');
         $stmt->execute();
        
         
          $result = $stmt->fetchAll();
 
  if ( count($result) ) {
    foreach($result as $row) {
      print_r($row);
    }  
  } else {
    echo "No rows returned.";
  }
  
        var_dump($stmt);
        
            // placeholder for field name values   
            $fullnameValue = "";
            $emailValue = "";
            $comments = "";
        
            
            $fullnameErr = "";
            $emailErr = "";
            $commentsErr = "";
            
           // var_dump($_POST);
            
            
            if ( count($_GET) ) {
            
                var_dump($_GET);
            }
            
            
            if ( count($_POST) ) {
                
                if ( !array_key_exists("fullname", $_POST) || empty($_POST["fullname"]) ) {
                   $fullnameErr = "Please enter your full name";                   
                } else {
                     $fullnameValue = $_POST["fullname"];
                }
                
                
                if ( !array_key_exists("comments", $_POST) || empty($_POST["comments"]) ) {
                   $commentsErr = "Please enter your comments";                   
                } else {
                   $comments = $_POST["comments"];
                }
                
                
                 if ( !array_key_exists("email", $_POST) || empty($_POST["email"]) ) {
                     $emailErr = "Please enter your email";                   
                } else {
                     $emailValue = $_POST["email"];
                }
                 
                
            }
       
        ?>
        
        <h1> Contact Form </h1>
        <form name="mainform" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">            
            <label>Name</label> <input type="text" name="fullname" value="<?php echo $fullnameValue;?>" /> <?php echo $fullnameErr ?> <br />
            <label>Email</label> <input type="text" name="email" value="<?php echo $emailValue;?>" /> <?php echo $emailErr ?> <br />
            <label>Comments</label> <textarea name="comments"><?php echo $comments;?></textarea> <?php echo $commentsErr ?> <br />
            <br />
            <input type="submit" value="Submit" />
        </form>
        
        
    </body>
</html>
