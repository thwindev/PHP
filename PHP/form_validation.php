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

    <!-- php section start  -->
    <?php
        //declare set input to empty for error message
        $error_name = $error_email = $error_phone = $error_address = "";

        //declare empty variables for assign inputs values
        $user_name = $user_email = $user_phone = $user_address =  "";

        if(isset($_POST['submit-btn'])){

            //check all input field are empty or not!
            if( $_POST['name'] == NULL || $_POST['name'] == '' || empty($_POST['name']) ){
                $error_name = 'Required Name';
            }else{
                $user_name = $_POST['name'];
            }

            if( $_POST['email'] == NULL || $_POST['email'] == '' || empty($_POST['email']) ){
                $error_email = 'Required Email';
            }else{
                 $user_email =$_POST['email'];
            }

            if( $_POST['phone'] == NULL || $_POST['phone'] == '' || empty($_POST['phone']) ){
               $error_phone = 'Required Phone';
            }else{
               $user_phone = $_POST['phone'];
            }

            if( $_POST['address'] == NULL || $_POST['address'] == '' || empty($_POST['address']) ){
                  $error_address = 'Required Email Address!';
            }else{
                $user_address = $_POST['address'];
            }

            if($user_name != '' && $user_email != '' && $user_phone != '' && $user_address != ''){
                echo 'User Name     : '.$user_name.'<br>';
                echo 'User Email    : '.$user_email.'<br>';
                echo 'User Phone    : '.$user_phone.'<br>';
                echo 'User address  : '.$user_address.'<br>';
            }
        }
    ?>
    <!-- php section end  -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow">
                <form action="" method="post">
                    <!-- Name -->
                    <div class="my-3 px-5">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                        <small class="text-danger"><?php echo $error_name;?></small>
                    </div>
                    <!-- Email -->
                    <div class="my-3 px-5">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="eg: example@gmail.com">
                        <small class="text-danger"><?php echo $error_email;?></small>

                    </div>
                    <!-- phone -->
                    <div class="my-3 px-5">
                        <label for="">Phone</label>
                        <input type="number" name="phone" class="form-control" placeholder="eg: 09.....">
                        <small class="text-danger"><?php echo $error_phone;?></small>

                    </div>
                    <!-- address -->
                    <div class="my-3 px-5">
                        <label for="">Address</label>
                        <textarea name="address" cols="30" rows="10" class="form-control"
                            placeholder="Enter Address"></textarea>
                        <small class="text-danger"><?php echo $error_address;?></small>

                    </div>
                    <!-- submit button -->
                    <div class="my-3 px-5 float-end">
                        <input type="submit" name="submit-btn" value="Save" class="btn btn-primary text-white">
                    </div>
                </form>
            </div>
        </div>

    </div>



</body>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script> -->
<script src="js/mdb.min.js"></script>

</html>