=============================================Part-1=============================================================
<?php

//Indexed Arrays
apple,banana,cherry
  
//How to Create
$array1=array('apple','banana,'cherry');
$array2=['apple','banana,'cherry'];

//Assessing Values
echo $array1[1]; //2 array value banana
echo $array2[2]; //2 array value cherry
echo $array2[0]; //2 array value apple

//For Loop Through an Indexed Array
for($i=0;$i<count($array1);$i++){
echo "$array1[$i] <br/>";
}

//ForEach Loop Through an Indexed Array
foreach($array1 as $item){
    echo "$item<br/>";
}

=============================================Part-2=============================================================
<?php

//Associative Array
//Key=>Value


//How to Create
$person=['First Name'=>"Hridoy", "Last Name"=>"Jomadder","E-mail"=>"contacthridoyjomadder@gmail.com"];

//Accessing Values
// echo $person['First_name'];


//ForEach Loop Through an Associative Array
foreach($person as $key=>$value){

    echo "$key: $value<br/>";
}

=============================================Part-3=============================================================
<?php

//Multidimensional Array
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = [7,8,9];

//How to create
$arr=[
    ['1','2','3'], //0 Child
    ['4','5','6'], //1 Child
    ['7','8','9'] //2 Child
];

//Accessing Values
echo $arr[1][1];

<?php

//Multidimensional Arrays


//How to create
$arr=[
    ['First Name'=>" Hridoy", "Last Name"=>" Jomadder","E-mail"=>" contacthridoyjomadder@gmail.com"],
    ['First Name'=>" Rabby", "Last Name"=>" Jomadder","E-mail"=>" rabby@gmail.com"],
    ['First Name'=>" Razu", "Last Name"=>" Jomadder","E-mail"=>" razu@gmail.com"]

];

//Accessing Values
echo $arr[1]['First Name'];
echo $arr[1]['Last Name'];

//ForEach loop Through an Multidimensional Array

foreach($arr as $child){

    foreach($child as $key=>$value){

        echo "$key:$value </br>";
    }
}

=============================================Part-4=============================================================
<?php

//Array Creation and Manipulation Functions


//array()- Cretes an array
$arr=array("A","B","C");
print_r($arr);

//array()- Returns all the values from the array.
$person=['First Name'=>"Hridoy", "Last Name"=>"Jomadder","E-mail"=>"contacthridoyjomadder@gmail.com"];
$value=array_values($person);
print_r($value);

//array()- Returns all the Keys from the array.
$person=['First Name'=>"Hridoy", "Last Name"=>"Jomadder","E-mail"=>"contacthridoyjomadder@gmail.com"];
$keys=array_keys($person);
print_r($keys);

//array_combine() - Combines two arrays: one for keys and the other for values.
$keys=["a","b","c"];
$values=["apple","ball","cat"];

// $combine=array_combine($keys,$values);
print_r($combine);

//array_fill() - Fills an array with values.
$filled=array_fill(0,5,"Hridoy");
print_r($filled);

//array_push() - Adds one or more elements to the end of an array.
$country=['Bangladesh','India'];
array_push($country,"Canada","Thiland");
print_r($country);

//array_pop() - Removes the last element from an array.
 $fruits=array('apple','orange','mango','cherry');
 array_pop($fruits);
 print_r($fruits);

//array_shift() - Removes the last element from an array.
 $fruits=array('apple','orange','mango','cherry');
 array_shift($fruits);
 print_r($fruits);

//array_unshift() - Adds one or more elements to the beginning of an array.
$fruits=array('apple','orange','mango','cherry');
array_unshift($fruits,'jackfruit');
print_r($fruits);

//array_splice() - Removes a portion of the array and replaces if with something else.
$fruits=array('apple','orange','mango','cherry');
array_splice($fruits,1,2,['demo,demo']);
print_r($fruits);


//array_splice() - Extracts a portion of the array.
$fruits=array('apple','orange','mango','cherry');
$portion=array_splice($fruits,0,2);
print_r($portion);


  ================================================Part-5=============================================================
<?php

//Array Information Functions


//count() - Counts this number of elements in an array.
$arr=["A","B","C"];
echo count($arr);

//sizeof() - An alias of count().Also counts the number of elements in an array.
$arr=["A","B","C","D"];
echo sizeof($arr);

//array_sum() - Computes the sum of values in array.
$arr=[1,2,3,4,5,6,7,8];
$sum=array_sum($arr);
echo $sum;


//array_product() - Computes if a value exists in an array.
$arr=[1,2,3,4,5,6];
$product=array_product($arr);
echo $product;

//in_array() - Checks if a value exists in an array.
$arr=[1,2,3,4,5,6];
$check=in_array(3,$arr);
if ($check){
    echo "3 found";
}else{
    echo "3 not found";
}



//is_array() - Checks if a variable is an array.
$arr=[1,2,3,4,5,6];
$check=is_array($arr);
echo $check;


//array_key_exists() - Checks if a key exists is an array.
$person=['First Name'=>"Hridoy", "Last Name"=>"Jomadder","E-mail"=>"contacthridoyjomadder@gmail.com"];
$check=array_key_exists("E-mail",$person);
echo $check;



//array_search() - Searches the array for a given value and returns the first corresponding key.
$person=['First Name'=>"Hridoy", "Last Name"=>"Jomadder","E-mail"=>"contacthridoyjomadder@gmail.com"];
$check=array_search("Hridoy",$person);
echo $check;

 =============================================Part-6=============================================================


