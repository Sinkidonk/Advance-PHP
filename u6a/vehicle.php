<?php
require ('VehicleClass.php');


$car = new Car('car on wheel', '200');
$plane = new Plane("Plane in wind", '56000');
$boat = new Boat('Boat in water', '120');

$car->showInfo();
echo "<br>";
$plane->showInfo();
echo "<br>";
$boat->showInfo();
echo "<br>";
var_dump($car);
?>