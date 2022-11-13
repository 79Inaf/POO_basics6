<?php

require_once('Highway.php');
require_once('Vehicle.php');

final class MotorWay extends Highway
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if (!($vehicle instanceof Bicycle) && !($vehicle instanceof Skateboard)) {
            $this->setCurrentVehicles($vehicle);
        } else {
            echo 'this vehicle is not allowed on Motorway' . PHP_EOL;
        }
    }
}
