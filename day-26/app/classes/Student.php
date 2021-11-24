<?php
namespace App\classes;


class Student
{
    public $name = 'Habib';
    protected $email = 'habib@gmail.com';
    private $mobile = '01793822069';


    public function one()
    {
        echo 'In One';
    }

    protected function Two()
    {
        echo 'In Two';
    }

    private function three()
    {
        echo 'In Three';
    }
}