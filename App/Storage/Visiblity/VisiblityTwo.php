<?php

namespace Storage\Visiblity;

class VisiblityTwo extends Visiblity
{
    public function displayPublic()
    {
        echo 'Hellow how are you'.BR;
        echo $this->public.BR;
        echo $this->protected.BR;
        // This property will generate error
        //echo $this->private.BR;
        
        //Private method visiblity
        $this->testVisiblity();

        // Will throw an uncaught arror
        //$this->testMyVisibility();
    }
}
