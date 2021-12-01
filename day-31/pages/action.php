<?php


require_once '../vendor/autoload.php';


use App\classes\PasswordGenerate;
use App\classes\ImageUpload;


if(isset($_POST['btn']))
{
    $passwordGenerate = new passwordGenerate($_POST);
    $result = $passwordGenerate->index();
    include ('home.php');
}

elseif (isset($_POST['btn1']))
{
    $imageUpload = new ImageUpload($_POST, $_FILES);
    $result = $imageUpload->index();
    include 'example-two.php';
}