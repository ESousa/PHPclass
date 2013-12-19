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
  $entities = "Hi <b>my name is</b>" ;
  echo htmlentities($entities);     
        
 }
 
 
 //e.Create an HTML table with 100 rows.  For each alternate row have the background color
 // be set to silver.   You can apply a class to each alternate row.  
 // Do not use CSS tricks.  Output the row number, execute the token function and display 
 // the date and time.
 

 function token() {
     
     return sha1( uniqid(mt_rand(), true));
 }
 
 date_default_timezone_set('America/New_York');
 
 $rows = 100;
 $col = 1;
 
 echo "<table border='1'>";
 
 for($tr=1; $tr <=$rows;$tr++){
     if (($tr % 2) == 0)
     {
         echo "<tr bgcolor=#E6E6E6>";
     }
        else
        {
         echo "<tr bgcolor=#FFFFFF>";
        }
           
        
        
     for ($td=1; $td<=$col; $td++){
         $today = date("F, j, Y, g:i a");
         echo "<td>" .$date. " ".token(). "</td>";
     }
     
     echo "</tr>";
 }
 
     echo "</table>";
	
     
     //f.Create 2 arrays.  One with a list of colors and the other with a list of phrases.  
     //Get a random color and phrase to display on every page load.
     
     function getRandom()
     {
         return rand(0, 5);
     }
     
    
	
?>
     
