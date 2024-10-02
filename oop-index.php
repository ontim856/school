<?php

include_once('functions/lib.php');
include_once('./vendor/autoload.php');

//include_once('student.php');
//include_once('airman.php');




$student1 = new \App\BAF\BSR\CommU\Student();
$AnAirman = new \App\BAF\BSR\CommU\Airman();

dd($student1);
//dd($AnAirman);

$student1->name = "Akaash";

//echo $student1->name; echo __LINE__;



?>