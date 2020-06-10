<?php
/**
 * Parent controller
 */
class ParentController
{
    protected $load = [];
    
    public function __construct()
    {
        $this->load = new Load();
    }
}
