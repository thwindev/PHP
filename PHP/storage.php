<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storages</title>
</head>

<body>

    <?php

    //store inside session
    session_start();//first declare

    $_SESSION['name'] = 'Walter White';//session storage

    $name = "thiwn";//variable storage

    echo 'sessio storage success!';
?>

</body>

</html>