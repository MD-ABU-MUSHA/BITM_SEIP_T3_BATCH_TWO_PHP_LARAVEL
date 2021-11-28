<?php

require_once './vendor/autoload.php';


use App\classes\Student;
use App\classes\Pattern;




$p = new Pattern();
$print = $p->patternThree();
echo '<hr/>';
$print = $p->patternFour();
echo '<hr/>';
$print = $p->patternOne();
$print = $p->patternTwo();






$result = ' ';
if(isset($_POST['btn']))
{
    $student = new Student($_POST);
    $result = $student->index();
}
?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./assets/css/bootstrap.css"/>
    <title>Document</title>
</head>
<body>
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="card">
                            <div class="card-header">
                                Enter The Information
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="first" class="col-form col-md-3">Enter String</label>
                                    <div class="col-md-9">
                                        <input id="first" type="text" name="first_name" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="first" class="col-form col-md-3">Output</label>
                                    <div class="col-md-9">
                                        <!-- <input id="first" type="text" name="first_name" class="form-control"/> -->
                                    <textarea class="form-control"><?php echo $result;?></textarea>
                                    </div>
                                </div>                            
                                <div class="form-group row">
                                    <label for="button" class="col-form col-md-3"></label>
                                    <div class="col-md-9">
                                        <input id="button" type="submit" value="submit" name="btn" class="btn btn-outline-success"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



<script src="./assets/js/jquery-3.6.0.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/bootstrap.js"></script>
</body>
</html>
