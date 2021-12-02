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
    private $array;
    private $array1;
    private $array2;
    private $imageFile;
    private $directory;
    private $imageName;






    public function __construct($data = null, $file = null)
    {
        if($data && $file)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];


            $this->imageFile = $file;
        }

        $this->filePath = './db.txt';

    }


    public function index(){
        $this->imageName = $this->imageFile['image']['name'];
        $this->directory = '../assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->imageFile['image']['tmp_name'],$this->directory);


//        $this->filePath = './db.txt';
        $this->file = fopen($this->filePath,'a');
        $this->data = "$this->name, $this->email, $this->mobile, $this->directory#";
        fwrite($this->file, $this->data);
        fclose($this->file);

        return 'Student info save successfully';

//        echo $this->name.' '.$this->email.' '.$this->mobile;
    }



    public function getAllStudentInfo()
    {

       $this->data =  file_get_contents($this->filePath);
      $this->array = explode("#",$this->data);
//       echo '<pre>';
//       print_r($this->array);
//       echo '</pre>';


//        echo '<pre>';
        foreach ($this->array as $key => $value)
        {

//            echo $value.'<br/>';


            if($value){

                $this->array1 = explode(",", $value);

                $this->array2[$key]['name'] = $this->array1[0];
                $this->array2[$key]['email'] = $this->array1[1];
                $this->array2[$key]['mobile'] = $this->array1[2];
                $this->array2[$key]['image'] = $this->array1[3];
            }

//          print_r($this->array1);
        }

        return $this->array2;
//        echo '</pre>';



//        echo '<pre>';
//        print_r($this->array2);
//        echo '</pre>';

    }
}