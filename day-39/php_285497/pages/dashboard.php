<?php include 'includes/header.php'; ?>

<?php
if(!isset($_SESSION['id']))
{
    header('Location: login.php');
}
?>



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body mb-5">
                           <h3 class="text-center mb-3">My Deshboard</h3>



                    </div>
                    <div class="mt-5  text-center">

                        <a href="https://www.facebook.com/md.musha.3726613"><i class=" fab fa-3x fa-facebook-square mr-5"></i></a>
                        <a href="https://github.com/MD-ABU-MUSHA"><i class="fab fa-3x fa-github mr-5"></i></a>
                        <a href="https://github.com/MD-ABU-MUSHA"><i class="fab fa-3x fa-twitter mr-5"></i></a>
                        <a href="https://www.linkedin.com/in/md-abu-musha-3a58b7220/"><i class="fab fa-3x fa-linkedin-in"></i></a>


                    </div>


                </div>
            </div>
        </div>
    </section>
<?php include 'includes/footer.php' ;?>