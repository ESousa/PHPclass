<?php


$fullname = "";
$email = "";
$comments = "";


 if ( count($_POST) ) {
        
        
        if ( array_key_exists("fullname", $_POST)) {
            $fullname = $_POST["fullname"];
        }
        
         if ( array_key_exists("email", $_POST)) {
            $email = $_POST["email"];
        }
        
        if ( array_key_exists("comments", $_POST)) {
            $comments = $_POST["comments"];
        }
 }
        
        if ( !empty($fullname) && !empty($email) && !empty($comments)) {
        
        
       
       $dbh = new PDO ("mysql:host=localhost;port3306;dbname=phplab","root","");
       
       try {
           
           $stmt = $dbh->prepare('insert into week3 set fullname = :fullnameValue,'
           . 'email = :emailValue,  comments = :commentsValue');
           
           
           $stmt->bindParam(':fullnameValue', $fullname, PDO::PARAM_STR);
           $stmt->bindParam(':emailValue', $email, PDO::PARAM_STR);
           $stmt->bindParam(':commentsValue', $comments, PDO::PARAM_STR);
           
           $resuldt = $stmt->execute();
           
           if ( $resuldt ) {
           
           echo "<h3>Info Submited</h3><p><a href='index.php'>Back to form</a></p>";
           } else {
               var_dump($resuldt);
           }
       }    catch ( PDOException $e) {
            echo "DataBase Error";
       
 }



 }else {
     echo "<h3>Info NOT Submited</h3><p><a href='index.php'>Back to form</a></p>";
 }

 ?>