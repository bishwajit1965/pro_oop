<?php
namespace Storage\Calculator;

class Circle extends Calculator
{
    protected $radius = 15;
    public function calculate()
    {
        return $this->radius * $this->radius *PI();
    }
}
