<?php
include_once('../functions/lib.php');

class Student{
   public $Name;
   public $Roll;
   private $Age;
   public $Fathers_name;
   protected $phone_Number;

   public function talk(){

   }
}



$student1 = new Student();

dd($student1);



$person1 = "Akash";
$phone1 = "01788832159";

$person1 = "MD Eyasin";
$phone1 = "01688832159";

$person1 = "Shakib";
$phone1 = "01888832159";