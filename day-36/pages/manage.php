<?php include'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">All Student Information</h4>
                    </div>
                    <div class="card-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($students as $student) { ?>
                                        <tr class="text-center " >
                                            <td><?php echo $student['name'] ?></td>
                                            <td><?php echo $student['email'] ?></td>
                                            <td><?php echo $student['mobile'] ?></td>
                                            <td><img src="<?php echo $student['image'] ?>" height="100" width="150"/> </td>
                                            <td>
                                                <a href="action.php?edit=<?php echo $student['id'] ?>" class="btn btn-outline-info btn-block">Edit</a>
                                                <a href="action.php?delete=<?php echo $student['id']?>" class="btn btn-outline-danger btn-block">Delete</a>
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


<?php include'include/footer.php' ?>
