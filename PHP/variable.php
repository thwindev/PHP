<!DOCTYPE html>
<html>
<body>

<?php
// Syntax

ECHO "Hello World!";
echo "Hello World!<br>";
EcHo "Hello World!<br>";

$color = 'red';
echo "My car is ". $color . "<br>";

// Variables
$greeting = 'Hello World'; // string
$x = 12; // integer
$y = 10.12; // double
$t = TRUE; // boolean

var_dump($x);
echo gettype($x);

echo $greeting."<br>","x = ".$x."<br>","y = ".$y."<br>";
//check type function
// echo 'True = '.$t;
 
$arr = array('apple','two',3);//array
for ($i=0; $i < count($arr); $i++) { 
    echo $arr[$i].'<br>';
}

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

//Object
class Animal{
    function Animal(){
        return $this->animal = "Brak";
    } 
}

$dog = new Animal();
$get_dog = $dog->Animal();

print($get_dog);

?>

</body>
</html>