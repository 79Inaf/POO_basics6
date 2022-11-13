<?php

require_once 'Vehicle.php';


class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
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

    public function setParkBrake()
    {
        $this->hasParkBrake = !($this->getHasParkBrake());
    }

    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }


    public function start()
    {
        if ($this->getHasParkBrake()) {
            throw new Exception('le frein à main est mis');
        }

        $this->setCurrentSpeed(15);
        return "Go !";
    }
}
