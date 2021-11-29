<?php

require_once '../vendor/autoload.php';


use App\classes\ExampleOne;


if(isset($_POST['btn']))
{
    $exampleOne = new ExampleOne($_POST);
    $result = $exampleOne->index();
    include 'home.php';
}