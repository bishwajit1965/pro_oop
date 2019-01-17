<?php

namespace Storage\Student;

class Student
{
    public $name;
    // public $address;

    public function insert($data)
    {
        $this->name = $data;
        $name = $this->validate($data['name']);
        $address = $this->validate($data['address']);
        if (empty($data['name'])) {
            echo'Name field is empty';
        } elseif (empty($data['address'])) {
            echo 'Address field is empty';
        }
    }

    public function select()
    {
        return $this->name;
    }

    public function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
