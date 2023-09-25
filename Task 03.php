Question : 

// Task 1:

// Create an associative array called $student with the following key-value pairs:

// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'

// Print the age of the student.


// Task 2:

// Create an associative array called $student with the key-value pairs:

// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'

// Check if the 'grade' key exists in the array using array_key_exists() and print the result.

 

// Task 3:

// Create an array called $numbers with values 100, 200, 50, 40, 50.

// Use a foreach loop to print each value in the array.

 

// Task 4:

// Create an array called $names with values 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', ‘Moni’.

// Use the array_filter() function to filter names that start with the letter 'M'.

// Print the filtered names.

 

// Task 5:

// Create a string variable $originalString with the value 'Hello, World!'.

// Use the strrev() function to reverse the string.

// Print the reversed string.


Answer:
 Task 1:
<?php
//Associative Array
$student=['name'=>"Alice","age"=>"22","grade"=>"A"];

//ForEach Loop Through an Associative Array
foreach($student as $key=>$value){

    echo "$key: $value";
}
?>

Task 2:
<?php
$student=['name'=>"Alice","age"=>"22","grade"=>"A"];
$check=array_key_exists('grade',$student);
echo($check);

Task 3:
<?php

$numbers = [100, 200, 50, 40, 50];
foreach($numbers as $number){
echo $number . "";
}


Task 4:
<?php
// Create the array
$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

// Use array_filter() to filter names starting with 'M'
$filteredNames = array_filter($names, function($name) {
    return strpos($name, 'M') === 0;
});

// Print the filtered names
foreach ($filteredNames as $name) {
    echo $name . "\n";
}
?>

Task 5:
<?php
$originalString = 'Hello, World!';

// Use strrev() to reverse the string
$reversedString = strrev($originalString);

// Print the reversed string
echo $reversedString;
?>
