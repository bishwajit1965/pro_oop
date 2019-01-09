<?php
namespace Storage\DesignPatterns\Factory;

use Storage\DesignPatterns\Factory\Automobile;

/**
 * AutomobileFactory class
 */

class AutomobileFactory
{
    public static function create($make, $model)
    {
        return new Automobile($make, $model);
    }
}
