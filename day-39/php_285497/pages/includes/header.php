<?php  session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css"/>
<<<<<<< HEAD
    <link rel="stylesheet" href="../assets/css/"/>
    <link rel="stylesheet" href="../assets/css/all.css"/>
=======
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da
</head>
<body>
<?php  if(isset($_SESSION['id'])) { ?>


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ml-auto">

            <?php if($_SESSION['user_type'] == 1) {?>
            <li><a href="home.php" class="nav-link">Add Users</a></li>
                <li><a href="action.php?status=manage-users" class="nav-link">Manage users</a></li>
            <li><a href="action.php?status=add-subject" class="nav-link">Add Subject</a></li>
<<<<<<< HEAD
<!--            <li><a href="#" class="nav-link">Manage Teacher</a></li>-->
=======
            <li><a href="#" class="nav-link">Manage Teacher</a></li>
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da
            <?php } else if(($_SESSION['user_type'] == 2)) { ?>

                <li><a href="action.php?status=my-subject&id=<?php echo base64_encode($_SESSION['id']); ?>" class="nav-link">MY Subject</a></li>


            <?php } else { ?>

                <li><a href="action.php?status=manage" class="nav-link">Manage Student</a></li>

            <?php } ?>

            <li><a href="action.php?status=logout" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>

<?php } ?>