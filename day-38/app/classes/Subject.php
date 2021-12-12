<?php
namespace App\classes;


use App\classes\Database;

class Subject extends Database
{
    private $data= [];
    private $i;
    private $row;
    private $queryResult;
    private $sql;
    private $con;


    public function __construct()
    {
        $this->con = $this->connection();
    }


    public function index()
    {

        $this->con;
        $this->sql = "SELECT * FROM students WHERE user_type = 0";

        if( $this->queryResult = mysqli_query($this->con, $this->sql))
        {
            $this->i = 0;
            while($this->row = mysqli_fetch_assoc($this->queryResult) )
            {
                $this->data[$this->i]['id'] = $this->row['id'];
                $this->data[$this->i]['name'] = $this->row['name'];
                $this->i++;
            }
            return $this->data;
        }else{
            die('Query Problem..'.mysqli_error($this->con));
        }


    }

}