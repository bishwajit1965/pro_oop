<?php
/**
 * Index Controller
 */
class Welcome extends ParentController
{
    public $loader;

    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $this->loader->view("home");
        $this->loader->model("CategoryModel");
    }
}
