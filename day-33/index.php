<?php

//session_start();
//$_SESSION['name'] = 'Bitm';
//$_SESSION['city'] = 'Dhaka';
//$_SESSION['country'] = 'Bangladesh';
//$_SESSION['mobile'] = '01793822069';
//
//
//




require_once './vendor/autoload.php';


use App\classes\Auth;


$auth = new Auth();
$auth->index();



