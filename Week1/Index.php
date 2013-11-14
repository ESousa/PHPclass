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

$arr = array("one", "two", "three", "four");
$arr = array("0" => "one","1" => "two","2" => "three","3" => "4","four");
$array = array("fname" => "Eric",
			   "lname" => "Sousa",
			   "email" => "e_dsl23@comcast.net",
			   "telephone" => "555-5555");
			   
			   
foreach( $array as $key => $value){
echo $key."\t=>\t" .$value."\n";
}



print_r($array);

var_dump(fullname);
	
	
	$arraymulti = array(
						array("one1","two2","three3"),
						array("one1","two2","three3"),
						array("one1","two2","three3");
						
						
						
//strip tags
$computer = '<p> Boston RedSox won the World Series.</p> <!--Who wouldve thought-->';
echo strip_tags($computer);
echo "\n";			
			
						
//explode
$nameArray = explode(" ", $fullname);
echo $nameArray[0] . " - " . $nameArray[1];						
						
						
						
	
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
