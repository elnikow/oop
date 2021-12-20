<?php

require 'Truck.php';

$marcel = new Truck('white', 2, 'essence', 500);
$warRig = new Truck('black', 8, 'essence', 100);

echo $warRig->forward();
echo $warRig->brake();
$warRig->setHowFull(100);
echo $warRig->isItFull();
