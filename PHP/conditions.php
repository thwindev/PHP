<?php 

// TRUE => 1  && FALSE => 0

// if else ,if elseif else

$fruit = 'banana';

if($fruit == 'apple')
    echo 'this is apple';
elseif($fruit == 'banana')
    echo 'found it! in second condition';
else
    echo 'finally not found';

// switch

$input = 3;

switch($input){
    case 1:echo 'This is first statement';break;
    case 2:echo 'This is second statement';break;
    case 3:echo 'This is third statement';break;
    case 4:echo 'This is fourth statement';break;
}