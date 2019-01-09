<?php
namespace Storage\DesignPatterns\Factory;

/**
 * Automobile class
 */
class Automobile
{
    protected $vehicleMake;
    protected $vehicleModel;

    public function __construct($make, $model)
    {
        $this->vehicleMake = $make;
        $this->vehicleModel = $model;
    }
    public function getMakeAndModel()
    {
        return $this->vehicleMake . ' ' .$this->vehicleModel;
    }
}
