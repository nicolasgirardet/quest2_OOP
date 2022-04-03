<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

// 1ère quête :

$bike = new Bicycle('blue', 1);
$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>';

$homersCar = new Car('orange', 5, 'fuel');
$homersCar->setCurrentSpeed(80);
var_dump($homersCar);

echo $homersCar->start();
echo '<br> Vitesse de la voiture : ' . $homersCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $homersCar->forward();
echo '<br> Vitesse de la voiture : ' . $homersCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $homersCar->brake() . '<br><br>';

// 2ème quête : 

$bicycle = new Bicycle('yellow', 1);
echo $bicycle->forward();
var_dump($bicycle);

echo '<br><br>';

$car = new Car('black', 4, 'electric');
echo $car->forward();
var_dump($car);

echo '<br><br>';

var_dump(Car::ALLOWED_ENERGIES);

echo '<br><br>';

$truck = new Truck('red', 3, 'fuel', 16000);
$truck->setCurrentLoad(8000);
var_dump($truck);

echo '<br><br>';
echo $truck->isFull() . '<br><br>';

echo $truck->start();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake() . '<br><br>';

$anotherTruck = new Truck('orange', 2, 'fuel', 12000);
$anotherTruck->setCurrentLoad(12000);
var_dump($anotherTruck);

echo '<br><br>';
echo $anotherTruck->isFull() . '<br><br>';

echo $anotherTruck->start();
echo '<br> Vitesse du camion : ' . $anotherTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $anotherTruck->forward();
echo '<br> Vitesse du camion : ' . $anotherTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $anotherTruck->brake() . '<br><br>';


