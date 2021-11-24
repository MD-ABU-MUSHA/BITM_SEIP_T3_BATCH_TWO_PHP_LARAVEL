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
        // }while($this->i <pre 20);



        // $this->data = [10, 20, 30, 'Habib', 123.25, true];
        // echo $this->data[11];

        // foreach($this->data as $item)
        // {
        //     echo $item.' ';
        // }



        $this->data = [
            0 =>[
            'name' => 'Musha',
            'mobile' => [
                'mobile_one' => '01793822069',
                'mobile_two'  => '01789393989'
            ],
            'email' => 'abumusaa787@gmail.com'
            ],

            1 =>[
            'name' => 'Habib',
            'mobile' => [
                'mobile-one' => '01793822069',
                'mobile-two' => '01789393989'
            ],
            'email' => 'abumusaa787@gmail.com'
            ]           
        ];

        echo '<pre>';
        // print_r($this->data);
        var_dump($this->data);
        echo '</pre>';


        // Super global Arry 
        // $_COOKIE[];
        // $_COOKIE[];
        // $_SESSION[];
        // $_SERVER[];
        // $_REQUEST[];

        // Form ar data handel kore
        // $_POST[];
        // $_GET[];
        // $_FILES[];

        
        // echo $this->data[0]['mobile']['mobile_one'];


        // foreach($this->data as $item){
        //     foreach($item as $key => $value){
        //         if($key == 'mobile')
        //         {
        //             foreach($value as $newValue)
        //             {
        //                 echo $newValue;
        //             }
        //         }else{
        //             echo $value;
        //         }
            
        //     }
        // }



        // foreach($this->data as $item){
        //     foreach($item as $key => $value){
        //         if(is_array($value))
        //         {
        //             foreach($value as $newValue)
        //             {
        //                 echo $newValue;
        //             }
        //         }else{
        //             echo $value;
        //         }
            
        //     }
        // }



        // echo $this->data['name'];

        // echo $this->data[1]['name'];


        // foreach($this->data as $item){
     // echo $item['name'].' '.$item['mobile'].' '.$item['email'].'<br/>';

        //     foreach($item as $value){
        //         echo $value.' ';
        //     }
        //     echo '<br/>';
        // }

        // foreach($this->data[2] as $key => $item){
        //     echo $key.' = '.$item.'<br/>';
        // }
    }
    

}