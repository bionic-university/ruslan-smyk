<?php

//TODO с кириллицей проблемы

$str = "MYY_-_"; 
$len = mb_strlen($str);

if($len){
	$m = array();

	for($i=0; $i<$len; $i++){
		$m[] = $str{$i};
	}

	$r = array_count_values($m);
	print_r($r);
}else
	echo 'Enter good str!';
