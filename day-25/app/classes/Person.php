<?php

namespace App\classes;


class Person{


    public $firstName;
    public $lastName;
    public $number;
    public $float;
    public $boolean;


    public $x;
    public $y;
    public $z;

    public function index()
    {
        // $this->firstName = 'BITM';
        // $this->lastName = 'BASIS';
        // $this->number = 1234;
        // $this->float = 12.20;
        // $this->boolean = true;
        // // echo $this->firstName.' '.$this->lastName;

        // echo gettype($this->firstName);

        // echo '<br/>';
        // echo '<br/>';
        // echo gettype($this->number);
        // echo '<br/>';
        // echo '<br/>';
        // echo gettype($this->float);
        // echo '<br/>';
        // echo '<br/>';
        // echo gettype($this->boolean);
        // echo '<br/>';
        // echo '<br/>';

        // $this->test();



        /*Operator
            Arithmatic Operator
                Binary: +, -, *, /, %;
                Unary: ++, --, -;
            Assignment: =, +=, -=, *=, /=, %=, .=
            Conditional Operator: >, >=, <, <=,==, !=, ===, !===
            Logical Operator : &&, ||, !
        */

        $this->x =10;
        $this->y = 20;


        echo $this->x + $this->y;
        echo '<br/>';


        echo $this->x - $this->y;
        echo '<br/>';



        echo $this->x * $this->y;
        echo '<br/>';



        echo $this->x / $this->y;
        echo '<br/>';


        echo $this->x % $this->y;
        echo '<br/>';
    }



    public function test()
    {
        echo 'Hello Test';
    }
}