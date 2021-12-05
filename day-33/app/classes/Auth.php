<?php


namespace App\classes;


class Auth
{
    private $email;
    private $userEmail;
    private $password;
    private $userPassword;

    public function __construct($data = null)
    {
        if($data)
        {
            $this->email = $data['email'];
            $this->password = $data['password'];
        }
    }
    
    public function  index()
    {
        header('Location: pages/login.php');
    }


    public function login()
    {
        $this->userEmail = 'admin@admin.com';
        $this->userPassword = '123456';
        if($this->email == $this->userEmail && $this->password == $this->userPassword){
            header("Location: home.php");
        }else{
            echo 'Sorry your email address or password is invalid';
        }
    }
}