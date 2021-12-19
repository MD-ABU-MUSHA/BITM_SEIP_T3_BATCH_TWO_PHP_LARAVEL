<?php
namespace App\classes;
class Student
{
    private $name;
    private $email;
    private $password;
    private $mobile;
    private $userType = [];

    private $link;
    private $sql;

    private $queryResult;
    private $data = [];
    private $row;
    private $i;
    private $studentInfo;


    public function __construct($data = null)
    {
        if($data)
        {
            $this->name     = $data['name'];
            if(isset($data['password']))
            {
                $this->password = md5($data['password']);
            }
            $this->email    = $data['email'];
            $this->mobile   = $data['mobile'];
<<<<<<< HEAD
            $this->userType = $data['user'];
=======
            $this->userType = $data['users'];
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da
        }


    }




    public function save()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php_285497');
        if($this->link)
        {
//            $this->imgURL   = $this->getImageURL();
            $this->sql      = "INSERT INTO users (name, email, password, mobile, user_type) VALUES ('$this->name', '$this->email', '$this->password', '$this->mobile', '$this->userType')";
            if(mysqli_query($this->link, $this->sql))
            {
              return 'Student info save successfully';
            }
            else
            {
                die('Query problem..'.mysqli_error($this->link));
            }
        }
    }
    public function getMyStudents()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php_285497');
        if($this->link)
        {
            $this->sql = "SELECT * FROM users";
            if(mysqli_query($this->link, $this->sql))
            {
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->i = 0;
                while ($this->row = mysqli_fetch_assoc($this->queryResult))
                {
                    $this->data[$this->i]['id']      = $this->row['id'];
                    $this->data[$this->i]['name']    = $this->row['name'];
                    $this->data[$this->i]['email']   = $this->row['email'];
                    $this->data[$this->i]['mobile']  = $this->row['mobile'];
                    $this->data[$this->i]['user_type']  = $this->row['user_type'];
                    $this->i++;
                }
                return $this->data;
            }
            else
            {
                die('Query problem..'.mysqli_error($this->link));
            }
        }

    }


    public function getAllStudentInfo()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php_285497');
        if($this->link)
        {
            $this->sql = "SELECT * FROM users";
            if(mysqli_query($this->link, $this->sql))
            {
               $this->queryResult = mysqli_query($this->link, $this->sql);
               $this->i = 0;
               while ($this->row = mysqli_fetch_assoc($this->queryResult))
               {
                   $this->data[$this->i]['id']      = $this->row['id'];
                   $this->data[$this->i]['name']    = $this->row['name'];
                   $this->data[$this->i]['email']   = $this->row['email'];
                   $this->data[$this->i]['mobile']  = $this->row['mobile'];
                   $this->data[$this->i]['user_type']  = $this->row['user_type'];
                   $this->i++;
               }
               return $this->data;
            }
            else
            {
                die('Query problem..'.mysqli_error($this->link));
            }
        }
    }




    public function getAllUsersInfo()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php_285497');
        if($this->link)
        {
            $this->sql = "SELECT * FROM users";
            if(mysqli_query($this->link, $this->sql))
            {
                $this->queryResult = mysqli_query($this->link, $this->sql);
                $this->i = 0;
                while ($this->row = mysqli_fetch_assoc($this->queryResult))
                {
                    $this->data[$this->i]['id']      = $this->row['id'];
                    $this->data[$this->i]['name']    = $this->row['name'];
                    $this->data[$this->i]['email']   = $this->row['email'];
                    $this->data[$this->i]['mobile']  = $this->row['mobile'];
                    $this->data[$this->i]['user_type']  = $this->row['user_type'];
                    $this->i++;
                }
                return $this->data;
            }
            else
            {
                die('Query problem..'.mysqli_error($this->link));
            }
        }
    }

    public function delete($id)
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php_285497');
        if($this->link)
        {
            $this->studentInfo = $this->getStudentInfoById($id);

            $this->sql = "DELETE FROM users WHERE id='$id'";
            if(mysqli_query($this->link, $this->sql))
            {
                session_start();
                $_SESSION['message'] = 'Student info delete successfully';
                header('Location: action.php?status=manage');
            }
            else
            {
                die('Query problem..'.mysqli_query($this->link));
            }
        }
    }

    public function getStudentInfoById ($id)
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php_285497');
        $this->sql = "SELECT * FROM users WHERE id='$id'";
        $this->queryResult = mysqli_query($this->link, $this->sql);
        return mysqli_fetch_assoc($this->queryResult);
    }

    public function updateStudentInfo($studentInfo)
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'php_285497');
        if($this->link)
        {


            $this->sql = "UPDATE users SET name = '$this->name', email = '$this->email', mobile = '$this->mobile', user_type = '$this->userType' WHERE id = '$studentInfo[id]'";
            if(mysqli_query($this->link, $this->sql))
            {
                return 'Student info update successfully';
            }
            else
            {
                die('Query problem..'.mysqli_error($this->link));
            }
        }
        else
        {
            die('Connection problem..'.mysqli_error($this->link));
        }
    }
}