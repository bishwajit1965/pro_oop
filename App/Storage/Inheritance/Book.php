<?php

namespace Storage\Inheritance;

class Book extends Main
{
    /**
     * Book an extended class.
     */
    public $name = 'Bangladeshi people';
    public $data = '';

    public function __construct()
    {
        echo 'Hellow I am from extended class';
    }

    public function index()
    {
        echo 'Hellow I am from extended class';

        return $this->sayHello();
    }

    public function sayHello()
    {
        echo 'I am saying hello to all '.$this->name;
    }
}
