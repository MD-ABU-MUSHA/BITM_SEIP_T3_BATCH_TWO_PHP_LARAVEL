<?php

namespace App\classes;

class Student
{
    public $name = 'BITM';
    public static $location = 'Kawranbazar';


    public function index()
    {
        echo 'Hello World';
        echo $this->name;
        

    }


    public static function test()
    {
        echo 'Hello Static';
        echo self::$location;
    
    }
}