<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <h3>Login Form</h3>
    <form action="" method="post">
        <label for="">Email</label>
        <input type="text" name="userEmail">
        <br>
        <label for="">Password</label>
        <input type="password" name="userPassword">
        <br>
        <input type="submit" value="login" name="loginBtn">
    </form>

    <?php
        $default_email = 'admin123@gmail.com';
        $default_password = '$2y$10$3gdijkXSVJzjWBkSHEGmiOuatGl2OxLicEv0H8.2qEvBh4Jo6ERci';//admin@123

        //hasing password
        // $hash_password = password_hash($default_password, PASSWORD_BCRYPT);
    
        if(isset($_POST['loginBtn'])){
            
            $user_email = $_POST['userEmail'];
            $user_password = $_POST['userPassword'];
            
            if($user_email == $default_email && password_verify($user_password,$default_password)){
                echo "Login Success!";
            }else{
                echo "Login Failed!";
            }

        }
    ?>

</body>

</html>