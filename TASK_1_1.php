<?php

//с кириллицей проблемы

$str = "MYY_-_"; 
$len = mb_strlen($str);

if($len){
	$m = array();
	
	for($i=0; $i<$len; $i++){
		if(!isset($m[$str{$i}]))
			$m[$str{$i}] = 1;
		else
			$m[$str{$i}]++;
	}
	
	print_r($m);
}else
	echo 'Enter good str!';
