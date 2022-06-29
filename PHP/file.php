<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>

<body>
    <h3>File Store</h3>

    <!-- file and photos are need attribute enctype = "multipart/form-data" -->
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="user_profile"><br><br>
        <input type="submit" value="Save" name="store_profile">
    </form>

    <?php
        if(isset($_POST['store_profile'])){
            echo '<pre>';
            print_r($_FILES);
            // print_r($_FILES['user_profile']['size']."bytes");
            
            $img_name = $_FILES['user_profile']['name'];
            $tmp_name = $_FILES['user_profile']['tmp_name'];
            
            print_r("Image Name : ".$img_name."<br>");
            print_r("Location : ".$tmp_name).'<br>';
            
            $folder_name = 'img/';

            // mkdir($folder_name);

            //store the file somewhere?
            // first creat a target folder to store img 
            $target_folder =$folder_name.$img_name;//'img/'.image_name
            
            //check folder is exit or not!
            if(move_uploaded_file($tmp_name,$target_folder)){
                move_uploaded_file($tmp_name,$target_folder);//default function for store => move_uploaded_file(tmp_name,target_file)
                setcookie('photo',$img_name);
                echo "Success Uploading...";
            }else{
                echo "Fail Uploading!";
            }
        }

    ?>

</body>

</html>