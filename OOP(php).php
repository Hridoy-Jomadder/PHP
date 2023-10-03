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

//$objfather=new father();
//$objfather->Print100();



<?php

/*
1.Overriding Methods.
2.Subclasses can override inherited methods from the superclass.
*/
class father{
    
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i+ <br/>";
        }
    }
}
class Son extends father{
    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i+ <br/>";
        }
    }
}
$objSon=new Son();
$objSon->Print100();


<?php

/*
1.Overriding Methods.
2.Subclasses can override inherited methods from the superclass.
*/
class father{
    
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i+ <br/>";
        }
    }
}
class Son extends father{
    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i+ <br/>";
        }
    }
}
$objSon=new Son();
$objSon->Print100();
//Output
01234567891011121314151617181920212223242526272829303132333435363738394041424344454647484950515253545556575859606162636465666768697071727374757677787980

    
<?php

/*  
Final keyword:
1.If you declare a class as final, it means it cannot be extended(inherited).
2.If you declare a method as final, it means it cannot be overridden by a subclass.
*/
final class father{
    
   final public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i+ <br/>";
        }
    }
}
class Son extends father{
    public function Print100(){
        for($i=0;$i<=80;$i++){
            echo "$i+ <br/>";
        }
    }
}
//null


<?php

/*  
Abstract Classes:
1.Abstract Classes cannot be instantiated on their own but can be subclassed.
*/
abstract class father{
    
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i<br/>";
        }
    }
}
class Son extends father{
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i <br/>";
        }
    }
}
$objSon=new Son();
$objSon->Print100();
//Output
0123456789101112131415161718192021222324252627282930313233343536373839404142434445464748495051525354555657585960616263646566676869707172737475767778798081828384858687888990919293949596979899100

<?php

/*  
Constructors and Inheritance:
1.If a child class has its own Constructor, the parent class's constructor will not be automatically called.
2.Use parent::__construct() if you want to explicitly call the base class's Constructor.
*/
class father{
    public function __construct(){
        echo "Father Constructor";
    }
}
class Son extends father{
    public function __construct(){
        echo "Son Constructor";
    }
}

new Son();
//Output
Son Constructor

<?php

/*  
Constructors and Inheritance:
1.If a child class has its own Constructor, the parent class's constructor will not be automatically called.
2.Use parent::__construct() if you want to explicitly call the base class's Constructor.
*/
class father{
    
    public function __construct(){
        echo "Father Constructor";
    }
}
class Son extends father{
    public function __construct(){
        parent:: __construct();
        echo "Son Constructor";
    }
}

new Son();
//Output
Father Constructor Son Constructor

    
<?php

/*  
Parent Keyword:
1.You can call the parent class's method using the parent keyword.
*/
class father{
    
    public function Father(){
        echo "Hello From Father";
    }
}
class Son extends father{
    public function Demo(){
        parent::Father();
    }
}

$obj=new Son();
$obj->Demo();    
//Output
Hello From Father
