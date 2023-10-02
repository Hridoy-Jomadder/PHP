/*===================================================== Part 01 =========================================================*/
<?php
/*
Class & Object
1. Class a allow developers to encapsulate related data and functions into a single entity.
2. Making it easier to manage and extend code.
3. An Object is an instance of a class. You create an object of a class using the new keyword.
*/
class OSTAD{
    public $name="PHP BATCH 02";
    public function demo(){
    echo $this->name;
    }

 }
 $obj=new OSTAD();
 $obj->demo();
//Output
PHP BATCH 02

/*===================================================== Part 02 =========================================================*/
<?php

class OSTAD{
    
    public function __construct(){
        echo "Hi,My name is Hridoy Jomadder";
    }

 }
new OSTAD();
//Output
Hi,My name is Hridoy Jomadder

<?php

class OSTAD{
    
    public function __construct($num1,$num2){
        echo $num1+$num2;
    }

 }
new OSTAD(2,3);
//Output
5
/*===================================================== Part 03 =========================================================*/
