/*===================================================== Part 01 =========================================================*/
/*
Class & Object
1. Class a allow developers to encapsulate related data and functions into a single entity.
2. Making it easier to manage and extend code.
3. An Object is an instance of a class. You create an object of a class using the new keyword.
*/
<?php

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
/*
Constructor
1. Method that gets executed whenever an object is instantiated from a class.
2. The Constructor method has a magic name: __construct.
*/
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
<?php

class Car{
    public $name;
    public $model;
    public $year;

    public function __construct($nameValue,$modelValue,$yearValue){
    
        $this->name=$nameValue;
        $this->model=$modelValue;
        $this->year=$yearValue;
    }
    
    public function MyCar(){
        echo "My Car name is $this->name, model is $this->model & the year is $this->year";
    }
 }

$CarObj = new Car("Toyota","Prius","2018");
$CarObj->MyCar();
//Output
My Car name is Toyota, model is Prius & the year is 2018
/*===================================================== Part 04 =========================================================*/
<?php

/*
Inheritance
1.Inheritance sets up a "like parent, like child" relationship between classes.
2.Instead of rewriting code, the child class can reuse or change what it gets from the parent.
3.One class (the child) can use everything from another class(the parent).
*/
class father{
    
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i+ <br/>";
        }
    }
}
class Son extends father{

}
$objSon=new Son();
$objSon->Print100();

























    
