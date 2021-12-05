<?php


namespace App\classes;


class primeNumber
{
    private $givenNumber;
    private $result;
    private $i;

    public function __construct($data)
    {
        $this->givenNumber = $data['given_number'];
    }

    public function index()
    {
        $this->result = "Your number $this->givenNumber is prime";

      for($this->i = 2; $this->i < $this->givenNumber; $this->i++ ){
          if($this->givenNumber % $this->i == 0){

              $this->result = "Your number $this->givenNumber is not Prime";
              break;
          }else{
              continue;
          }
      }
      return $this->result;


    }
}