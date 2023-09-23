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

<?php

$color = "green";
if($color == "red" || $color == "blue" || $color =="yellow"){
    echo "Primary color.";
}elseif($color =="green" || $color == "orange" || $color == "orange"){
    echo "Secondary color.";
}else{
    echo "Other Color";
}

//Ternary Operator
<?php

$number = 17;
$remainder = $number % 2;
$result = ($number == 0) ? "Zero" : (($remainder == 0) ? "Even Number" : "Odd Number");

echo $result;

//
<?php

$marks = 30;

if($marks >= 90){
    $result = "A+";
}elseif($marks >= 80){
    $result = "A";
}elseif($marks >= 70){
    $result = "A-";
}elseif($marks >= 60){
    $result = "B";
}elseif($marks >= 50){
    $result = "C";
}elseif($marks >= 40){
    $result = "D";
}elseif($marks >= 30){
    $result = "F";
}
echo $result;


<?php

$marks = 90;

$result = match($marks){
    90 => "A+",
    80 => "A",
    70 => "A-",
    60 => "B",
    50 => "C",
    40 => "D",
    default => "F",
};
echo $result;
