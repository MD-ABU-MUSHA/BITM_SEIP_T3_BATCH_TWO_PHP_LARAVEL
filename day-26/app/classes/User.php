<?php

namespace App\classes;

use App\classes\Student;


class User extends Student
{
    public $username;
    public $password;
    public $token;


    public function __construct($data)
    {
        echo $data;
    }


    public function login()
    {
        echo $this->email;
    }


    public function logout()
    {
        echo 'In Logout';
    }


    public function changePassword()
    {
        echo 'In change password';
    }
}