<?php include 'includes/header.php'; ?>

<?php
    if(isset($_SESSION['id']))
    {
        header('Location: dashboard.php');
    }
?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Login Form</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-danger mb-2"><?php echo isset($message) ? $message: '';?></h4>
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" required name="email" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" required name="password" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="loginBtn" class="btn btn-outline-danger btn-block" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD
<?php //include 'includes/footer.php' ;?>
=======
<?php include 'includes/footer.php' ;?>
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da
