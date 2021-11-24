<?php

namespace App\classes;


// Repeated Statement
// FOR
// WHILE
// DO WHILE
// FOR EACH


class Statement{
    public $i;

    public function forLoop()
    {
        for($this->i = 0; $this->i <5; $this->i++)
        {
            echo 'hello World <br/>';
        }
    }
}