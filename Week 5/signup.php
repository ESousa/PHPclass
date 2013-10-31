<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signup
 *
 * @author gforti
 */
class Signup extends DB {
    //put your code here
    
    protected $errors = array();

    public function userNameIsTaken( $username ) {        
        $db = $this->getDB();
        if ( null != $db ) {
            $stmt = $db->prepare('select username from signup where username = :usernameValue limit 1');
            $stmt->bindParam(':usernameValue', $username, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);            
            if ( is_array($result) && count($result) ) {
                return true;
            }
        }
        return false;        
    }
    
    public function entryIsValid(){
        $isvalid = true;
        if (count($_POST)) {
            
            if (array_key_exists("email", $_POST)) {
                
                if ( !Validator::emailISValid($_POST["email"])) {
                    $this->errors["email"] = "Email is not valid.";
                    $isvalid = false;
                }
            } else {
                $this->errors["email"] = "Email is missing";
                $isvalid = false;
                
            }
            return;
        }
        
        
        
        
        
    }
    
    public function saveEntry() {
        
        if ( ! $this->entryIsValid()) return false;
        $db = $this->getDB();
        if (null != $db ) {
            $stmt = $db->prepare('insert into signup set username = :usernameValue,'
                    . 'email = :emailValue, password = :passwordValue');
            $stmt->bindParam('usernameValue', $_POST["username"], PDO::PARAM_STR);
            $stmt->bindParam('emailValue', $_POST["email"], PDO::PARAM_STR);
            $stmt->bindParam('passwordValue', sha1($_POST["password"]), PDO::PARAM_STR);
            if ( $stmt->execute() ){
                return true;
            }
            
            
        }
        
        return false;
        
        
        
        
    }
    
    public function getErrors() {
        return $this->errors;
    }
}


?>