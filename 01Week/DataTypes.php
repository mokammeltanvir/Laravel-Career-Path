<?php
// PHP Data Types
// PHP supports the following data types:

// String
$x = "Hello world!";
$y = 'Hello world!';
echo $x;
echo "\n";
echo $y;
echo "\n";
var_dump($x);

// Integer
$x = 5985;
var_dump($x);

// Float (floating point numbers - also called double)
$x = 10.365;
var_dump($x);

// Boolean
$x = true;
$y = false;
var_dump($x);
var_dump($y);

// Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

// Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "\n";
var_dump($myCar);

// NULL
$x = "Hello world!";
$x = null;
var_dump($x);


?>