<?php
namespace BionicUniversity\RuslanSmyk\TASK_1;

class Counter{

	private $str = "MYY_-_";

	public function __construct($str){
	
		if(mb_strlen($str)){
			print_r(array_count_values(str_split($str)));
		}else {
			echo 'Enter good str!';
		}
	}
}