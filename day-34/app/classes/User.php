<?php


namespace App\classes;


class User
{
    public $email;
    public $name;


    public function __construct()
    {
        $this->name = 'BITM';
        $this->email = 'info@bitm.org.bd';
    }

    public function index(){
        $this->name = 'BITM';
        $this->email = 'info@bitm.org.bd';
        return "User name is $this->name and email address is $this->email";
    }


    public  function getAllUser()
    {
        return[
            0 => [
                'id' => 1,
                'name' => 'Musha',
                'email' => 'musa@gmail.com',
                'password' => '123456'
            ],


            1 => [
                'id' => 2,
                'name' => 'karim',
                'email' => 'karim@gmail.com',
                'password' => '111222'
            ],


            2 => [
                'id' => 3,
                'name' => 'Musha',
                'email' => 'Mushakahan@gmail.com',
                'password' => '444444'
            ],


        ];
    }
}