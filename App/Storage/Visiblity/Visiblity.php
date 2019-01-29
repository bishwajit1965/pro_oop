<?php

namespace Storage\Visiblity;

define('BR', '<br>');

class Visiblity
{
    public $public = 'Public property displayed.';
    protected $protected = 'Protected property displayed.';
    private $private = 'Private property displayed.';

    public function testVisiblity()
    {
        echo $this->public.BR;
        echo $this->protected.BR;
        echo $this->private.BR;
    }

    public function displayPublic()
    {
        echo 'I am in a public method.'.BR;

        return true;
    }
}
