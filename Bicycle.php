<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';


final class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        return $this->getCurrentSpeed() > 10 ? true : false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
