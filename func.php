<?php

function sayHello(&$name){
    echo "<h1>Привет $name!</h1>";
    $name = "Вася"; 
}

$n = "RUSLAN";

// GOOD
sayHello($n); 
