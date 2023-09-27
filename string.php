<?php
//string
$firstname = "Hridoy";
$lastname = "Jomadder";
$fullname = $firstname ." ". $lastname;
echo $fullname;

//Array to string conversion
$fruits = ["Apple","Banana","Orange"];
echo $fruits[1];

//Array and String Manipulation with Utility Functions
//1
$string = " Hello World";
echo $string[1];
//2
$string = " Hello World";
$lenght = strlen($string);
for($i=0;$i<$lenght;$i++){
    echo strlen($i);
}
//3
$string = " Hello World";
echo substr($string,0,5); //hello

//4
$string = " Hello World";
$lenght = strlen($string);
$startingPosition = $lenght - 5;

 echo substr($string,$startingPosition); 











