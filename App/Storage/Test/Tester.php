<?php
namespace Storage\Test;

class Tester extends Test
{
    public $name, $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
        echo $this->name . $this->address;
    }
}