<?php

//class Person {
//    function __construct($id){
//
//    }
//    function getVardas (){
//
//    }
//}
//
//$zmogus = new Person(1);
//$zmogus->vardas='Labas';
//$zmogus->getVardas();

//

class Zmogus {
    public static $skaicius=10;
    function __construct(){
        self::$skaicius++;//tik taip galima dirbi su static
    }
}

$obj=new Zmogus();
$obj2=new Zmogus();
echo Zmogus::$skaicius; //tik taip galima iskviesti static $skaicius