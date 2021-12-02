<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/2/2021
 * Time: 2:33 PM
 */

namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $mobile;
    private $filePath;
    private $file;
    private $data;




    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->mobile = $data['mobile'];
    }


    public function index(){
        $this->filePath = './db.txt';
        $this->file = fopen($this->filePath,'a');
        $this->data = "$this->name, $this->email, $this->mobile";
        fwrite($this->file, $this->data);
        fclose($this->file);

//        echo $this->name.' '.$this->email.' '.$this->mobile;
    }
}