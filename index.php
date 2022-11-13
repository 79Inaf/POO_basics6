<?php

// require_once('Vehicle.php');
require_once('Highway.php');
require_once('Bicycle.php');
require_once('Car.php');
require_once('Truck.php');
require_once('Skateboard.php');
require_once('MotorWay.php');
require_once('PedestrianWay.php');
require_once('ResidentialWay.php');


$punto = new Car('green', 2, 'fuel');
$scenic = new Car('brown', 5, 'fuel');
$vtt = new Bicycle('red', 1);
$board = new Skateboard('yellow', 0);


try {
    $punto->start();
} catch (Exception $e) {
    $punto->setParkBrake();
} finally {
    echo 'ma voiture roule comme un donut';
    $punto->setCurrentSpeed(15);
}



var_dump($punto);
die();

$a89 = new MotorWay;
$streetOfLentilly = new ResidentialWay;
$greenRoad = new PedestrianWay;

$a89->addVehicle($vtt);
$a89->addVehicle($board);
$a89->addVehicle($punto);
$a89->addVehicle($scenic);

var_dump($a89->getCurrentVehicles());

$streetOfLentilly->addVehicle($vtt);
$streetOfLentilly->addVehicle($punto);
$streetOfLentilly->addVehicle($board);

var_dump($streetOfLentilly->getCurrentVehicles());

$greenRoad->addVehicle($vtt);
$greenRoad->addVehicle($scenic);
$greenRoad->addVehicle($board);

var_dump($greenRoad->getCurrentVehicles());









?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>