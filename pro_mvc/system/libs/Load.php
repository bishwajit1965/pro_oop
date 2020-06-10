<?php
/**
 * Load class
 */
class Load
{
    public function __construct()
    {
    }

    public function view($fileName, $data = null)
    {
        include 'app/views/'. $fileName.'.php';
    }

    public function model($modelName)
    {
        include 'app/models/' . $modelName . '.php';
        return new $modelName;
    }
}
