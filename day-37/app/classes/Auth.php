<?php

namespace App\classes;
class Auth
{
    private $email;
    private $password;
    private $user;


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
        header('Location: pages/login.php');
    }


    public function login()
    {
    echo $this->email.'<br/>'.$this->password;
    }


    public function logout()
    {

    }


    public function changePassword()
    {

    }
}