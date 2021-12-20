<?php

final class MotorWay extends Highway
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): void
    {
        if (!($vehicle instanceof Skateboard || $vehicle instanceof Bicycle)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}