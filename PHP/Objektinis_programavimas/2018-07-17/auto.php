<?php


//pavyzdziai

//class Automobilis {
//    // pvz function getCar() {} yra vadinami metodais,ne funkcijom
//
//    function getCar(){
//        echo 'Masina';
//    }
//    function getColor (){
//        return $this->spalva;
//    }
//
//    function setColor ($color = ''){
//        $this->spalva=$color;
//        }
//}
//$auto = new Automobilis();
//
//$auto->setColor('melyna');
//echo $auto->getColor();
//$auto->getCar();


class Automobilis {
    function __construct($plate){
        $this->plate = $plate;
//        echo 'Class sukurta';
    }
    function __toString($i='')
    {
        return 'Stringas';
    }

    function setColor($color=''){
        $this->color=$color;
    }
    function getPlate(){
        echo $this->getPlate.'<br>';
    }
    function __destruct()
    {
        echo 'netrink prasau'.'<br>';
    }
}


$auto=new Automobilis('ABC231',4);
echo $auto->getPlate().''.$auto->plate;


//UZDUOTELE:

//class RatuKiekis {
//   function getNumber (){
//       $nr = $_GET['masinosNR'];
//       return $nr;
//   }
//   function getRatuSk ($ratai = ''){
//
//   }
//}

