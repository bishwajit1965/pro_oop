<?php
namespace Storage\AbstractClass;

abstract class Car
{
    abstract public function name();
    public function data()
    {
        echo 'I belong to public method';
    }
}
