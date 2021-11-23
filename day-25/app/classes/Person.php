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


        // Arithmatic Operator
        // Binary
        echo '<h3>Binary Operator</h3>';
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


        // unary

        echo $this->x++;
        echo '<br/>';
        echo $this->x;
        echo '<br/>';
        echo ++$this->x;
        echo '<br/>';


        echo '<h3>Unary Operator</h3>';
    



        echo $this->x--;
        echo '<br/>';
        echo $this->x;
        echo '<br/>';




        // Assignment Operator
        echo '<h3>Assignment Operator</h3>';

        $this->x = 10;
        $this->y = 20;

        echo $this->x += $this->y;
        echo '<br/>';


        echo $this->x -= $this->y;
        echo '<br/>';




        echo $this->x *= $this->y;
        echo '<br/>';


        echo $this->x /= $this->y;
        echo '<br/>';


        echo $this->x %= $this->y;
        echo '<br/>';



        echo $this->x .= $this->y;
        echo '<br/>';



        // Conditional Operator
        echo '<h3>Conditional Operator</h3>';
        echo '<br/>';

        $this->x = 10;
        $this->y = 20;


        echo $this->x > $this->y;echo '<br/>';
        echo $this->x >= $this->y;echo '<br/>';
        echo $this->y == $this->y;echo '<br/>';


        echo '<br/>';

        echo $this->x < $this->y;
        echo '<br/>';

        echo $this->x <= $this ->y;
        echo '<br/>';


        echo $this->x == $this->y;
        echo '<br/>';


        echo $this->x != $this->y;
        echo '<br/>';


        echo $this->x === $this->y;
        echo '<br/>';


        echo $this->x !== $this->y;
        echo '<br/>';






    }



    public function test()
    {
        echo 'Hello Test';
    }
}