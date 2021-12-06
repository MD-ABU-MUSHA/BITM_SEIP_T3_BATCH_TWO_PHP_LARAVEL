<?php


require_once './vendor/autoload.php';


use App\classes\Teacher;
use App\classes\Home;
use App\classes\Auth;




$teacher = new Teacher();
//$teacher->view();


$auth = new Auth();
$auth->index();
$auth->login();




//$teacher->one();
//$teacher->twenty();
//$teacher->ten();

//$home = new Home();
//$home->index();









