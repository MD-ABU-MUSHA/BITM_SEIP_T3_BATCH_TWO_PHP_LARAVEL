<?php
require_once './vendor/autoload.php';

use App\classes\Example;
use App\classes\Statement;
use App\classes\Student;
use App\classes\User;


$student = new Student();
$user = new User('BITM');
// echo $student->name;
// echo $student->email;
// echo $student->mobile;


// echo $student->one();
// echo $user->login();


// $example = new Example();

//echo $example->hello();

// $loop = new Statement();

// $loop->forLoop();