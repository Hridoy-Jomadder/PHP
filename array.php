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
