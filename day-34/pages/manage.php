
<?php include'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>All Student Info Goes Here</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="text-center">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student){ ?>
                            <tr class="text-center">
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['mobile']; ?></td>
                                <td>
                                    <img src=" <?php echo $student['image']; ?>" height="80" width="120"/>
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

<!--Card-->

<section class="py-5 bg-success">
    <div class="container">
        <div class="row">
            <?php foreach ($students as $student){ ?>
            <div class="col-md-3">
                <div class="card border-success">
                    <div class="col-md-12"><img src=" <?php echo $student['image']; ?>" height="200" width="250"/></div>
                    <div class="card-body bg-info">
                        <h4 class="card-title"><?php echo $student['name']; ?></h4>
                        <h4 class="card-title"><?php echo $student['email']; ?></h4>
                        <h4 class="card-title"><?php echo $student['mobile']; ?></h4>
                    </div>
                    <div class="card-footer bg-dark">
                        <a href="" class="btn btn-outline-success btn-block">Read More...</a>
                    </div>
                </div>
            </div>
            <?php } ?>
<!--            <div class="col-md-3">-->
<!--                <div class="card border-success">-->
<!--                    <img src="./img/4.jpg" class="card-img-top" alt="">-->
<!--                    <div class="card-body bg-info">-->
<!--                        <h4 class="card-title">This is card heading....</h4>-->
<!--                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, minima non dolorum ab neque, illo recusandae mollitia earum sit vitae assumenda eaque omnis. Nemo consequuntur quos dolore quibusdam error iure!</p>-->
<!--                    </div>-->
<!--                    <div class="card-footer bg-dark">-->
<!--                        <a href="" class="btn btn-success float-right">Read More...</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3">-->
<!--                <div class="card border-success">-->
<!--                    <img src="./img/8.jpg" class="card-img-top" alt="">-->
<!--                    <div class="card-body bg-info">-->
<!--                        <h4 class="card-title">This is card heading....</h4>-->
<!--                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, minima non dolorum ab neque, illo recusandae mollitia earum sit vitae assumenda eaque omnis. Nemo consequuntur quos dolore quibusdam error iure!</p>-->
<!--                    </div>-->
<!--                    <div class="card-footer bg-dark">-->
<!--                        <a href="" class="btn btn-success float-right">Read More...</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3">-->
<!--                <div class="card border-success">-->
<!--                    <img src="./img/8.jpg" class="card-img-top" alt="">-->
<!--                    <div class="card-body bg-info">-->
<!--                        <h4 class="card-title">This is card heading....</h4>-->
<!--                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, minima non dolorum ab neque, illo recusandae mollitia earum sit vitae assumenda eaque omnis. Nemo consequuntur quos dolore quibusdam error iure!</p>-->
<!--                    </div>-->
<!--                    <div class="card-footer bg-dark">-->
<!--                        <a href="" class="btn btn-success float-right">Read More...</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>


</section>

<?php include'include/footer.php' ?>


