<!-- 
local
global
static 
-->

<?php
$x = 12;//global variable

function test(){
    echo "<p>x inside of function: $x </p>";//x is undefined
}

test();

echo "<p>x inside of function: $x </p>";

?>