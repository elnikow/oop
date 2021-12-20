<?php

class ResidentialWay extends Highway
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle): void
    {
        $this->currentVehicles[] = $vehicle;
    }
}