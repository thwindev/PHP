<?php

// looping => for, foreach, while(), do while()

$target = 0;
while($target != 10){
    echo $target."<br>";
    $target++;
}

//do while() work at least once before looping

$a = 100;

do {
    echo 'hello <br>';
} while ($a <= 10);

//for (init, condition, increament or decreament)

for ($i=0; $i <= 10 ; $i++) { 
    echo $i."<br>";
}

//foreach with array with keyword as 

$arrs = array('one','two','three');

foreach($arrs as $arr){
    echo $arr;
}