<?php
require_once './vendor/autoload.php';

use App\classes\Example;
use App\classes\Statement;

$example = new Example();

//echo $example->hello();

$loop = new Statement();

$loop->forLoop();