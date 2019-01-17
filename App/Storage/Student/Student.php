<?php

namespace Storage\Student;

class Student
{
    public function insert($data)
    {
        $name = $this->validate($data['name']);
    }

    public function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
