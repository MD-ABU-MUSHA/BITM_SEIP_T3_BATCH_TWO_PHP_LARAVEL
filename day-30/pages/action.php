<?php


require_once '../vendor/autoload.php';


use App\classes\PasswordGenerate;


if(isset($_POST['btn']))
{
    $passwordGenerate = new passwordGenerate($_POST);
    $result = $passwordGenerate->index();
    include ('home.php');
}