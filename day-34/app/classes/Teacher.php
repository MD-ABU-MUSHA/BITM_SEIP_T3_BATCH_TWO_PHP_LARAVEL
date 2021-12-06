<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;


class Teacher extends User implements ExampleOne

{

    public $mobile;


    public function __construct()
    {
        $this->mobile =' 01793822069';
        $this->name = 'Basis';
        $this->email = 'Basis@gmail.com';
    }


    public function view()
    {
        echo "user name is $this->name, email address is $this->email and mobile is $this->mobile";
    }

    public function one()
    {
        // TODO: Implement one() method.
        echo 'in One';
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo 'in Two';
    }

    public function three()
    {
        // TODO: Implement three() method.
        echo 'in Three';
    }

}