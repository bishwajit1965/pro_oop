<?php

namespace Storage\Interfacer;

/**
 * RectangleArea class.
 */
class RectangleArea implements Calculator
{
    protected $base = 12;
    protected $height = 22;

    public function calculate()
    {
        return $this->base * $this->height;
    }
}
