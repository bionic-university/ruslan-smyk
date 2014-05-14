<?php

require_once __DIR__ . '/../bootstrap.php';

use BionicUniversity\RuslanSmyk\Exam as Exam;

$obj = new Exam\Image(200, 100);

$obj->thumbnail();
