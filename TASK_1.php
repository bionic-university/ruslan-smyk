<?php

$str = "MYY_-_";

if(mb_strlen($str)){

	print_r(array_count_values(str_split($str)));

}else {

    echo 'Enter good str!';

}