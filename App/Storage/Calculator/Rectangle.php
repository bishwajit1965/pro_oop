<?php
namespace Storage\Calculator;

/**
 * Rectangle class
 */
class Rectangle extends Calculator
{
    protected $base = 20;
    protected $height = 30;

    public function calculate()
    {
        return $this->base * $this->height;
    }
}
