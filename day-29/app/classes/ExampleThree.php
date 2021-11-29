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
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->mobile = $data['mobile'];
        $this->subject = $data['subject'];
    }

    public function index()
    {
        return $this->result;
        // echo '<pre>';
        // print_r($this->result);
        // echo '</pre>';
    }
}