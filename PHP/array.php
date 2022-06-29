<?php

// array

$str = array('one','two','three','four');
$arr = [1,2,3,4];

echo '<pre>';
var_dump($str);

echo count($str);

foreach($arr as $ar){
    print_r($ar.'<br>');
}

//associated array

$asso_arrays = [
    'nest_array' => [
        1,2,3,4
    ], 
    'name'  =>  'Harry',
    'age'   =>  23,
];

// access with $value[index]

foreach($asso_arrays as $asso_array_key => $value ){
    print_r($value);
}