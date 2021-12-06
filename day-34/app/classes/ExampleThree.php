<?php


namespace App\classes;


abstract class ExampleThree
{

    public $value1;
    public $value2;

    public function __construct()
    {
        $this->value1 = 100;
        $this->value2 = 200;
    }


    public function ten()
    {
        $this->value1 = 100;
        echo $this->value1;
    }

    abstract function twenty();


}