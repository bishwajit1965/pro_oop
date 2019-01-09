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
        echo 'I am in index method';
    }

    public function store()
    {
        echo 'I am in store method';

        return $this->index();
    }

    public function updateView()
    {
        return $this->store();

        echo $this->data;
    }

    public function update($data)
    {
    }

    public function deleteView($data)
    {
    }

    public function delete($id)
    {
    }
}
