<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\ExampleThree;
use App\classes\ExampleFour;


class Teacher extends ExampleThree implements ExampleOne, ExampleTwo

{


    use ExampleFour;

    public $mobile;
    public $test;


    public function __construct()
    {
        $this->mobile =' 01793822069';
        $this->name = 'Basis';
        $this->email = 'Basis@gmail.com';
    }


    public function view()
    {
        $this->hello();
//        echo "user name is $this->name, email address is $this->email and mobile is $this->mobile";
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

    public function four()
    {
        // TODO: Implement four() method.
        echo 'in Four';
    }


    public function five()
    {
        // TODO: Implement five() method.
        echo 'in Five';
    }


    public function twenty()
    {
        echo "hello World";
    }


    public  function ten()
    {
      $this->test =   parent::ten();
      echo $this->test.' This is custom thing......';

    }


}