<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN MINI</title>
    <!-- Font Awesome -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
    <!-- MDB -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" /> -->

    <link rel="stylesheet" href="css/mdb.min.css">

</head>

<body class="">

    <div class="container ">
        <div class="row row-col-2  justify-content-center">
            <div class="col col-lg-3 text-center bg-light">
                <a href="login_mini_project.php">
                    <button class="btn btn-dark w-50 my-2">Login</button>
                </a>
                <a href="logout.php">
                    <button class="btn btn-danger w-50 my-2">Logout</button>
                </a>
                <a href="register.php">
                    <button class="btn btn-info w-50 my-2">Register</button>
                </a>
            </div>
            <div class="col col-lg-5 text-center bg-light">
                <div class="bg-success text-white text-center">
                    <b class="p-5">Logout Success!</b>
                </div>
            </div>
        </div>
    </div>

    <!-- php -->
    <?php
        session_start();

        session_destroy();
    ?>

</body>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script> -->
<script src="js/mdb.min.js"></script>

</html>