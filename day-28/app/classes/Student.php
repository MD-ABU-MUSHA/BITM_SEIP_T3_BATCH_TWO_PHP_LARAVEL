<?php

namespace App\classes;

class Student
{

    public $firstName;



    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        
    }

    public function index()
    {


        $this->output = str_word_count($this->firstName).' '.strlen($this->firstName);
        return $this->output;      
        

    }

}