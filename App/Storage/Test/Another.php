<?php
namespace Storage\Test;

class Another extends Tester
{
    public $name;
    public $address;
    public $phone;
    public $another;

    public function __construct($name, $address, $phone, $another)
    {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->another = $another;
        echo $this->name . $this->address.$this->phone.$this->another;
    }
}
