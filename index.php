<?php

require 'Car.php';

$sweetRide = new Car('white', 2, 'essence');

$sweetRide->setParkBrake(true);

try{
    $sweetRide->start();
} catch(Exception $e) {
    $sweetRide->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
