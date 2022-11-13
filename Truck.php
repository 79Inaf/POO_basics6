<?php

require_once('Vehicle.php');

final class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $storageCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbseats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbseats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function isFull(): string
    {
        if ($this->storageCapacity === $this->loading)
            {return "the truck is full";}

        return "the truck is in filling";
    }
    
    public function getEnergy() : string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {   if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
        return $this;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    
    public function setStorageCapacity (int $storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }
    
    public function setLoading (int $loading)
    {
        $this->loading = $loading;
    }

}
