<?php


require_once './vendor/autoload.php';


use App\classes\Teacher;
use App\classes\ExampleOne;
use App\classes\Home;



$teacher = new Teacher();
$teacher->view();



$example = new ExampleOne();
$example->one();


$teacher = new Teacher();
$teacher->one();


//$home = new Home();
//$home->index();









