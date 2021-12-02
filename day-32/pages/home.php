<?php include'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Please fill All the Information</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="name" class="col-form-label col-md-3">Name</label>
                                <div class="col-md-9">
                                    <input type="text" id="name" name="name" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-form-label col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" id="email" name="email" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile" class="col-form-label col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" id="mobile" name="mobile" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" name="btn" value="Save Info" class="btn btn-outline-success btn-block"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include'include/footer.php' ?>


