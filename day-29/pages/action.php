<?php

require_once '../vendor/autoload.php';


use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\ExampleThree;



if(isset($_POST['btn']))
{
    $exampleOne = new ExampleOne($_POST);
    $result = $exampleOne->index();
    include 'home.php';
}
else if(isset($_POST['btn1']))
{
    $exampleTwo = new ExampleTwo($_POST);
    $result = $exampleTwo->index();
    include 'example-two.php';
}

else if(isset($_POST['btn2']))
{
    $exampleThree = new ExampleThree($_POST);
    $result = $exampleThree->index();
    extract($result);
    include 'example-three.php';
}
else{
    header('Location: home.php');
}