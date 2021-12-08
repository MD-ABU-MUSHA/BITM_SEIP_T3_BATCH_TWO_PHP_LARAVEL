<?php


require_once '../vendor/autoload.php';
use App\classes\Person;



if(isset($_POST['btn']))
{
    $person = new Person($_POST);
    $messege = $person->save();
    include 'home.php';




}