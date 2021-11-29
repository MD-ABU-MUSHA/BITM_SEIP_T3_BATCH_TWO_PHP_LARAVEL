<?php


namespace App\classes;

class ExampleThree
{

    public $result = [];
    public $name;
    public $email;
    public $mobile;
    public $subject;

    public function __construct($data)
    {
        $this->result = $data;     
    }

    public function index()
    {
        return $this->result;
        // echo '<pre>';
        // print_r($this->result);
        // echo '</pre>';
    }
}