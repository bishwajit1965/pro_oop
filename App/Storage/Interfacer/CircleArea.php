<?php
namespace Storage\Interfacer;

/**
 * Circle class implements Calculator
 */
class CircleArea implements Calculator
{
    protected $radius = 20;
    public function calculate()
    {
        return (.5 * $this->radius) * $this->radius * PI();
    }
}
