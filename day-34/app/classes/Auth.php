<?php


namespace App\classes;


class Auth
{
    private $email;
    private $password;


    public function __construct($data = null)
    {
        if($data)
        {
            $this->email = $data['email'];
            $this->password = $data['password'];
        }
    }


    public function index()
    {
        header('Location: ./pages/login.php');

    }


    public function login()
    {

    }
}