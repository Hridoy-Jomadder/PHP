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


  =============================================Part-5=============================================================
=============================================Part-6=============================================================


