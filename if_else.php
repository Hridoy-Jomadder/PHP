<?php

$number = 18;
$remainder = $number % 2;
if ($remainder == 0){

    echo"The number $number is even.";
}else{
    
    echo"The number $number is odd.";
}

<?php

$number = 30;
$remainder = $number % 2;
if ($number == 0){
    echo "The number $number is zero.";
}else if ($remainder == 0){

    echo"The number $number is even.";
}else{

    echo"The number $number is odd.";
}

<?php

$color = "red";
if($color == "red"){
    echo "Primary color.";
}elseif($color == "green"){
    echo "Secondary color.";
}elseif($color =="blue"){
    echo "Primary color.";
}elseif($color =="yellow"){
    echo "Primary color.";
}else{
    echo "Other Color";
}
