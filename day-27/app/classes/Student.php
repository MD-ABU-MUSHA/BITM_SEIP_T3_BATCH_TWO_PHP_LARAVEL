<?php

namespace App\classes;

class Student
{
    public $name = 'BITM';
    public static $location = 'Kawranbazar';


    public $firstName;
    public $lastName;
    public $fullName;


    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
        
        
    }

    public function index()
    {
        // echo 'Hello World';
        // echo $this->name;


        $this->fullName = $this->firstName.' '.$this->lastName;
        return $this->fullName;
        

    }


    public static function test()
    {
        echo 'Hello Static';
        echo self::$location;
    
    }
}