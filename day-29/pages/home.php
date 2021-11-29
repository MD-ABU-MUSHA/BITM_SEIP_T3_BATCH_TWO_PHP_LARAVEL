<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="../assets/css/bootstrap.css"/>
    <title>Day-29</title>
</head>
<body>


                        <!-- Menu -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Example One</a></li>
                <li><a href="" class="nav-link">Example Two</a></li>
                <li><a href="" class="nav-link">Example Three</a></li>
                <li><a href="" class="nav-link">Example Four</a></li>
            </ul>
        </div>
    </nav>


    <!-- Menu End -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3>Please fill all the information</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Enter Your String</label>
                                    <div class="col-md-9">
                                        <input type="text" name="given_string" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                    <textarea class="form-control"><?php echo $result; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success btn-block"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.js"></script>
</body>
</html>
