<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    // Constants
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Variables
    private string $energy;
    private int $energyLevel;
    private int $maxVolume;
    private int $howFull;

    // Constructor
    public function __construct(string $color, int $nbSeats, string $energy, int $maxVolume)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->maxVolume = $maxVolume;
        $this->howFull = 0;
    }

    // Other functions
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getMaxVolume(): int
    {
        return $this->maxVolume;
    }

    public function setMaxVolume(int $maxVolume): void
    {
        $this->maxVolume = $maxVolume;
    }

    public function getHowFull(): int
    {
        return $this->howFull;
    }

    public function setHowFull(int $howFull): void
    {
        $this->howFull = $howFull;
    }

    public function isItFull(): string
    {
        if ($this->howFull === $this->maxVolume) {
            return 'full';
        } else {
            return 'in filling';
        }
    }
}