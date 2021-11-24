<?php

namespace App\classes;


// Repeated Statement
// FOR
// WHILE
// DO WHILE
// FOR EACH


class Statement{
    public $i;
    public $data = [];

    // for loop
    public function forLoop()
    {
        // for($this->i = 0; $this->i <5; $this->i++)
        // {
        //     echo 'hello World <br/>';
        // }

        // $this->i = 10;
        // while($this->i <20){
        //     echo $this->i.' ';
        //     $this->i++;
        // }


        // $this->i = 10;
        // do{
        //     echo $this->i.' ';
        //     $this->i++;
        // }while($this->i < 20);



        // $this->data = [10, 20, 30, 'Habib', 123.25, true];
        // echo $this->data[11];

        // foreach($this->data as $item)
        // {
        //     echo $item.' ';
        // }



        $this->data = [
            0 =>[
            'name' => 'Musha',
            'mobile' => '01793822069',
            'email' => 'abumusaa787@gmail.com'
            ],

            1 =>[
            'name' => 'Habib',
            'mobile' => '01793822069',
            'email' => 'abumusaa787@gmail.com'
            ],

            2 =>[
            'name' => 'Rafsan',
            'mobile' => '01793822069',
            'email' => 'abumusaa787@gmail.com'
            ]
        ];


        // echo $this->data['name'];

        // echo $this->data[1]['name'];


        foreach($this->data as $item){
            // echo $item['name'].' '.$item['mobile'].' '.$item['email'].'<br/>';

            foreach($item as $value){
                echo $value.' ';
            }
            echo '<br/>';
        }

        // foreach($this->data[2] as $key => $item){
        //     echo $key.' = '.$item.'<br/>';
        // }


    }





    

}