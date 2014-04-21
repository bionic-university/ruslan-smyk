<?php

//TODO ALL

$str = "MYY_-_"; 
$len = mb_strlen($str);

$m = array();

for($i=0; $i<$len; $i++){
	$m[] = $str{$i};
}

$r = array_count_values($m);
print_r($r);
