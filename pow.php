<?php

function myPow($x, $y) {

    return $y!=1 ? $x * myPow($x, $y-1) : $x;
    
}

echo '<pre>';
print_r(myPow(3,3));
echo '</pre>';


