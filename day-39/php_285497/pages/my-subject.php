<?php include "includes/header.php";


?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Add Subject List</h4>
                            <h6>Student Name</h6>

                        </div>
                        <div class="card-body">
                             <table class="table table-bordered table-hover">
                                 <tr>
                                     <th class="text-center">Subject Name</th>
                                 </tr>
                                 <tr>
                                     <td>
                                         <?php foreach ($subjects as $subject) { ?>
                                            <label class="mr-1"><?php echo $subject; ?>
                                        <?php } ?>
                                     </td>
                                 </tr>
                             </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "includes/footer.php";?>