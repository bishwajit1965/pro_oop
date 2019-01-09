<?php
namespace Storage\Calculator;

/**
 * Triangle
 */
class Triangle extends Calculator
{
    protected $base = 10;
    protected $height = 15;

    public function calculate()
    {
        return (.5 * $this->base) * $this->height;
    }
}
