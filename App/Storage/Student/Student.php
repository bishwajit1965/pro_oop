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
        $phone = $this->validate($data['phone']);
        if (empty($name)) {
            echo '<span style="color:red;">Name field is empty</span> <br>';
        } else {
            $name = $this->validate($data['name']);
        }
        if (empty($address)) {
            echo '<span style="color:red;">Address field is empty </span><br>';
        } else {
            $address = $this->validate($data['address']);
        }
        if (empty($phone)) {
            echo '<span style="color:red;">Phone field is empty </span><br>';
        } else {
            $address = $this->validate($data['address']);
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
