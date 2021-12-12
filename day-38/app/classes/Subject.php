<?php
namespace App\classes;


use App\classes\Database;

class Subject extends Database
{
    private $data= [];
    private $i;
    private $result;
    private $queryResult;
    private $sql;


    public function index()
    {

        $this->con;
        $this->sql = "SELECT * FROM students WHERE user_type = 0";

        if( $this->queryResult = mysqli_query($this->connection(), $this->sql))
        {

        }else{
            die('Query Problem..'.mysqli_error($this->connection()));
        }

        header('Location: add-subject.php');
    }

}