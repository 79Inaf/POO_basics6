<?php

require_once('Highway.php');

final class PedestrianWay extends Highway
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicles($vehicle);
        } else {
            echo 'this vehicle is not allowed on Motorway' . PHP_EOL;
        }
    }
}
