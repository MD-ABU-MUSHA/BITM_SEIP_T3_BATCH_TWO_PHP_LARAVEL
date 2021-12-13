<?php include 'includes/header.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>All Student Info Goes Here</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success"><?php echo isset($message) ? $message: ''; ?></h4>

                            <?php if(isset($_SESSION['message'])) { ?>
                            <h4 class="text-center text-success">
                                <?php echo $_SESSION['message']; unset($_SESSION['message']); ?>
                            </h4>
                            <?php } ?>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>UserType</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students as $student) { ?>
                                    <tr>
                                        <td><?php if($student['user_type'] == 2) {
                                                echo $student['name'];
                                            } ?>
                                        </td>
                                        <td><?php if($student['user_type'] == 2) {
                                                echo $student['email'];
                                            } ?>
                                        </td>
                                        <td><?php if($student['user_type'] == 2) {
                                                echo $student['mobile'];
                                            } ?>
                                        </td>


                                        <td><?php if($student['user_type'] == 2) {
                                                echo $student['mobile'];
                                            } ?>
                                        </td>

                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php' ;?>