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
						
//trim  
$text = "The Patriots got ripped off Monday night";
echo trim($text);	
        
        
//strlen 
$text = "Hi how are you";
echo strlen($text);     
        
//str_shuffle 
$text = "The weather is getting fridge";
echo str_shuffle($text);       
        
 //ord 
 $text = "Netbeans needs debugging";
 echo ord($text);
 
 //ucwords 
 $text = "this is a test";
 echo ucwords($text);
 
 
 //array_count_values
 $array = array(1, "", 1, "", "");
 print_r(array_count_values($array));
 
 //array_push
 $test = array("Denver", "NewEngland", "Chicago");
 array_push($test, "Broncos", "Patriots", "Bears");
 print_r($test);
 
 //array_rand
 $input = array ("FallRiver","Dartmouth","Westport","Somerset","Swansea");
 $rand_keys = array_rand($input, 2);
 echo $input [$rand_keys[0]] . "\n";
 echo $input [$rand_keys[1]] . "\n";
 
 
 //sort
  $Team = array("Celtics", "Heat", "Lakers", "Mavericks");
  sort($Team);
  foreach ($Team as $key => $name) {
  echo "Team[" . $key . "] = " . $name . "\n";
  }
 
 
 //shuffle
 $numbers = range(1, 20);
 shuffle($numbers);
    foreach ($numbers as $switched){
        echo "$switched";
        
        
  //htmlentities
  $entities = "Im soooo <b>tired</b>" ;
  echo htmlentities($entities);     
        
 }
 
						
	
?>
     