<?php


namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $password;
    private $mobile;
    private $imageName;
    private $file;
    private $directory;
    private $link;
    private $sql;
    private $imgURL;
    private $message;


    public function __construct($data = null, $file = null)
    {
        if($data)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->password = $data['password'];
            $this->mobile = $data['mobile'];
        }

        if($file)
        {
            $this->file = $file;
        }
    }


    private function getImageURL()
    {
        $this->imageName = $this->file['image']['name'];
        $this->directory = '../assets/img/'.$this->imageName;
        move_uploaded_file($this->file['image']['tmp_name'], $this->directory);
        return $this->directory;
    }


    public function save()
    {
        $this->link = mysqli_connect('localhost','root','','example_two');
        if($this->link)
        {
          $this->imgURL =  $this->getImageURL();
            $this->sql = "INSERT INTO students(name, email, password, mobile, image) VALUES ('$this->name','$this->email','$this->password','$this->mobile', '$this->imgURL')";
        mysqli_query($this->link, $this->sql);
         $this->message =  'okk';
        }
        return $this->message;
    }

}