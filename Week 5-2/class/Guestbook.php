<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guestbook
 *
 * @author 001235743
 */
class Guestbook {
    //put your code here
    
    
    
    protected $errors = array();
    
    public function getGuestbookData() {
        $result = array();
        $db = $this->getDB();
        
        
        if (NULL != $db){
            $stmt = $db->prepare('select name, email, guestbook comments');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
    }
            
            
    return $result;
    }
    
    
    public function displayGuestbook() {
        
    $results = $this->getGuestbookData();
        
        if ( count($results) ) {
            echo '<table border = "1">';
            foreach($results as $table){
                echo '<tr>';
                echo '<td>', $table['name'], '</td>';
                echo '<td>', $table['email'], '</td>';
                echo '<td>', $table['comments'], '</td>';
                echo '</tr>';
        }
            
         echo '<h2>Comments Posted</h2>';
           
        }else {
            
            
        echo '<p>No comments posted</p>';
        }
        
        
    }
    public function nameEntryIsValid(){
        if(array_key_exists("name", $_POST)){
                if(! Validator::nameIsValid($_POST["name"])){
                    $this->errors["name"] = "Name is not valid.";  
                }
            }else{
                $this->errors["name"] = "Name is required";
            }
            return(!empty($this->errors["name"]) ? true : FALSE);
    }
    
    
     public function emailEntryIsValid(){
         if(array_key_exists("email", $_POST)){
                if(! Validator::emailIsValid($_POST["email"])){
                    $this->errors["email"] = "Email is not valid.";  
                }
                
                
                
            }else{
                $this->errors["email"] = "Email is required";
            }
            return(!empty($this->errors["email"]) ? true : FALSE);
        }
    public function commentsE
    EntryIsValid(){
        
        
        if(array_key_exists("comments", $_POST)){
                if(! Validator::commentsIsValid($_POST["comments"])){
                    $this->errors["comments"] = "Comments is not valid.";  
                }
            }else{
                $this->errors["comments"] = "Comments is required";
            }
            return(!empty($this->errors["comments"]) ? true : FALSE);
    }
    public function processGuestbook(){
        
        
        
        $db= $this->getDB();
        
        if(null != $db){
                $stmt = $db->prepare('insert into guestbook set name = :nameValue, ' . 
                          'email = :emailValue, comments = :commentsValue');
                  $stmt->bindParam (':nameValue', $_POST["name"], PDO::PARAM_STR);
                  $stmt->bindParam (':emailValue', $_POST["email"], PDO::PARAM_STR);
                  $stmt->bindParam (':commentsValue', $_POST["comments"], PDO::PARAM_STR);
                  if($stmt->execute()){
                      return true;
                      
                  }
                  
                  
        print_r($_POST);
        return (count($this->errors)? false : true);
    }
    }
    
    
    public function getErrors() {
        return $this->errors;
    }
}
?>
    
    
    
    
    

