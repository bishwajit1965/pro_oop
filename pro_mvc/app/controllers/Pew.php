<?php

class Pew extends ParentController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function myName($param)
    {
        echo "I am from myName method in Pcontroller $param";
        return $this;
    }
}
