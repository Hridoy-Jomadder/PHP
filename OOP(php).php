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
