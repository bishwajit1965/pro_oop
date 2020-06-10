<?php
/**
 * Index class
 */
 
class Index extends ParentController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        $this->load->view("home");
    }

    public function category()
    {
        $data = [];
        $categoryModel = $this->load->model("CategoryModel");
        $data['category'] = $categoryModel->category();
        $this->load->view("category", $data = []);
    }
}
