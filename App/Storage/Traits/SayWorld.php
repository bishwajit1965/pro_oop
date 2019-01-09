<?php
namespace Storage\Traits;

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo ' World 12345!';
    }
}
