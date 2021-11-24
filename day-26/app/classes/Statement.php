<?php

namespace App\classes;


// Repeated Statement
// FOR
// WHILE
// DO WHILE
// FOR EACH


class Statement{
    public $i;

    // for loop
    public function forLoop()
    {
        // for($this->i = 0; $this->i <5; $this->i++)
        // {
        //     echo 'hello World <br/>';
        // }

        $this->i = 10;
        while($this->i <20){
            echo $this->i.' ';
            $this->i++;
        }

    }





    

}