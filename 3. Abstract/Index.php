https://www.c-sharpcorner.com/UploadFile/d0e913/abstract-class-interface-two-villains-of-every-interview/
<?php 
require_once 'Teacher.php';
require_once 'Student.php';
$t = new Teacher("Kim","Vestergård","Mogensen");
$t->setClass("ØIOE211");
$t->setClass("opboi20ed601");
$t->setSalary(500);
echo $t->__toString()."\n";
echo $t->getSalary()."\n";
echo $t->getClass()."\n";

$s = new Student("George","","Cluney");
$s->setClass("ØIOE211");
$s->setClass("opboi20ed601");
echo $s->__toString()."\n";
echo $s->getClass()."\n";




?>