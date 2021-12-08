<?php


namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $password;
    private $mobile;
    private $link;


    public function __construct($data = null)
    {
        if($data)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->password = $data['password'];
            $this->mobile = $data['mobile'];
        }
    }

}