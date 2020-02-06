<?php

namespace Storage\Inheritance;

class Main
{
    /**
     * Main class.
     */
    public $data = 1000;
    public $address;

    public function index()
    {
        echo 'I am in index method 00<br>';
    }

    public function store()
    {
        echo 'I am in store method 2<br>';

        return $this->index();
    }
    public function updateView()
    {
        return $this->store().'<br>';

        echo $this->data.'<br>';
    }

    public function update()
    {
        echo 'I am in update method 1';
    }

    public function deleteView($data)
    {
    }

    public function delete($id)
    {
    }
}
