<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>

    <!-- Get method , Post Method -->
    <!-- submit for FORM  -->

    <form method="post">

        <label for="">Name</label>
        <input type="text" name="userName"><br>
        <label for="">Ph Number</label>
        <input type="number" name="userPhone"><br>

        <input type="submit" value="Save" name="saveBtn">
        <button type="submit" name="clearBtn">Clear</button>
    </form>

    <?php
        //isset() is click button or not!
        if(isset($_POST['saveBtn'])){
            $user_name = $_POST["userName"];
            $user_phone = $_POST["userPhone"];

            if($user_name == NULL || $user_phone == NULL){
                 echo "You need to fill the content!";
            }else{

                echo 'Username :'.$user_name.'<br>'.'Phone Number :'.$user_phone;
            }
        }
        
        if(isset($_POST['clearBth'])){
            echo "Clear btn clicked!";
        }
    ?>

</body>

</html>