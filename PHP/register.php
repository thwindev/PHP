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
            <div class="col col-lg-3 text-center ">
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
            <div class="col col-lg-5 text-center bg-white">
                <form action="" method="post">
                    <label for="">Register</label>
                    <!-- name -->
                    <div class="mb-3">
                        <label for="" class="w-100 text-start">Name</label>
                        <input type="name" name="name" class="form-control">
                    </div>
                    <!-- email -->
                    <div class="mb-3">
                        <label for="" class="w-100 text-start">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <!-- password -->
                    <div class="mb-3">
                        <label for="" class="w-100 text-start">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <!-- confirm password -->
                    <div class="mb-3">
                        <label for="" class="w-100 text-start">Confirm Password</label>
                        <input type="password" name="confirm-password" class="form-control">
                    </div>
                    <!-- submit -->

                    <button type="submit" value="save" name="register" class="btn btn-primary float-end">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- php section -->
    <?php
        //to use session need to declare session start();
        session_start();

        //check strong password with  => preg_match('/[A-Z]/',string)
        function checkStrongPassword($password){
            // echo $password;
            $upper_status = false;
            $lower_status = false;
            $number_status = false;
            $special_status = false;

            if(preg_match('/[A-Z]/',$password)){
                $upper_status = true;
            }

            if(preg_match('/[a-z]/',$password)){
                $lower_status = true;
            }

            if(preg_match('/[0-9]/',$password)){
                $number_status = true;
            }

            if(preg_match('/[!@#$%^&*]/',$password)){
                $special_status = true;
            }

            if($upper_status && $lower_status && $number_status && $special_status){
                return true;
            }else{
                return false;
            }

        }

        if(isset($_POST['register'])){
            $user_name = $_POST['name'];
            $user_mail = $_POST['email'];
            $user_password = $_POST['password'];
            $confirm_password = $_POST['confirm-password'];
            
            //hasing password 
            $hash_password = password_hash($user_password, PASSWORD_BCRYPT);
            
            if($user_mail != "" && $user_mail != "" && $user_password != "" && $confirm_password != ""){
                if(strlen($user_password) >= 6 && strlen($confirm_password)){
                    if($user_password == $confirm_password){
                        $status = checkStrongPassword($user_password);
                        // echo $status;
                        if($status){
                            $_SESSION['email'] = $user_mail;
                            $_SESSION['password'] = $hash_password;
                            echo "Register success!";
                        }else{
                            echo "Your password must contain [A-Z][a-z][0-9] and special character [!@#$..etc]";
                        }
                    }else{
                        echo 'Password not same, Try again!';
                    }
                }else{
                    echo '<b>Your password must be greater than 6</b>';
                }
            }else{
                echo 'Need to fill!';
            }
            // strong password => A - Z , a - z, 0 - 9,@!#$%^&* ...etc
        }
    ?>

</body>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script> -->
<script src="js/mdb.min.js"></script>

</html>