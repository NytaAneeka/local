<?php
$database = mysqli_connect('localhost','root','','darbuotojai_db');

class Person {
    private static $db;
    private $id;
    public $name;
    public $surname;
    public $phone;
    function __construct($id) {
        if (!isset(self::$db)) {
            global $database;
            self::$db = $database;
        }
        $isArray=is_array($id);
        if ((int)$id > 0 && !$isArray) {
            $result = mysqli_query(self::$db,"SELECT * FROM darbuotojai WHERE id = " . $id) or die(mysqli_error());
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    foreach ($row as $key => $value) {
                        $this->{$key} = $value;
                    }
                }
            }
        }else {
            $name=$id['name'];
            $surname=$id['surname'];
            $phone= $id['phone'];
            $new=mysqli_query(self::$db,"INSERT INTO darbuotojai (name,surname,phone) VALUES ('$name','$surname','$phone')");
            $this->name = $name;
            $this->surname = $surname;
            $this->phone = $phone;
            return $this;
        }
    }

    function save() {
        $update = Array();
        foreach ($this as $col => $val) {
            $update[] = $col ." = '" . $val ."'";
        }
        $query = "UPDATE darbuotojai SET " . implode(",",$update).  " WHERE id = " . $this->id;

        mysqli_query(self::$db,$query) or die(mysqli_error(self::$db));
    }

    function delete(){
        mysqli_query(self::$db,"DELETE FROM darbuotojai WHERE id=".$this->id);
    }

}

$vardas = new Person (Array(
    'name' => 'Maryte',
    'surname' => 'Antanyte',
    'phone' => '+37065464651'
));
echo $vardas->name;

//$vardas->name = 'Aurelija';
//
//$vardas->save();

//$vardas->delete();
//
//print_r($vardas);

