<?php

require_once './vendor/autoload.php';


use App\classes\Student;


$student = new Student;
// echo $student->name;
// $student->index();

// echo Student::$location;

// echo Student::test();

// echo $student->test();

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
                    <div class="card">
                        <div class="card-header">
                            Enter The Information
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="first" class="col-form col-md-3">First Name</label>
                                <div class="col-md-9">
                                    <input id="first" type="text" name="" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last" class="col-form col-md-3">Last Name</label>
                                <div class="col-md-9">
                                    <input id="last" type="text" name="" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="full" class="col-form col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input id="full" type="text" name="" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="button" class="col-form col-md-3"></label>
                                <div class="col-md-9">
                                    <input id="button" type="button" value="submit" name="" class="btn btn-outline-success"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script src="./assets/js/jquery-3.6.0.js"></script>
<script src="./assets/js/bootstrap.bundle.js"></script>
<script src="./assets/js/bootstrap.js"></script>
</body>
</html>
