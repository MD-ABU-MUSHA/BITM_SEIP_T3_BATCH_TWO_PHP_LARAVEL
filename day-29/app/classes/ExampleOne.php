<?php

namespace App\classes;


class ExampleOne
{
    public $givenString;


    public function __construct($data)
    {
        $this->givenString = $data['given_string'];
    }


    public function index()
    {
        return $this->givenString;
    }
}