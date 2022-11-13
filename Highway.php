<?php

require_once('Vehicle.php');

abstract class Highway
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle);

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setCurrentVehicles(Vehicle $currentVehicle)
    {
        $this->currentVehicles[] = $currentVehicle;
    }

    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}
