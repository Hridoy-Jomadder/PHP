<?php

//Build Function
$x = "Hello Hridoy";
$length=strlen($x);

echo $length;

<?php

//User Define Function
function addTwoNum(){
    $x=50;
    $y=20;
    echo $x+$y;
}
addTwoNum();

<?php

//Function with Paramiter pas/input
function addTwoNum($x,$y){
    echo $x+$y;
}

addTwoNum(1,0);
addTwoNum(1,1);
addTwoNum(1,2);

<?php

//Function Paramiter Default
function addTwoNum($a,$b,$c,$d){
    echo $a+$b+$c+$d;
}

addTwoNum(1,2,3,4);









