<?php

function sayHello(&$name){
    echo "<h1>Привет $name!</h1>";
    $name = "Вася"; 
}

// ОШИБКА!
sayHello("John"); 
