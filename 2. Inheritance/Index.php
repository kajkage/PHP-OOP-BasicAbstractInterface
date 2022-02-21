<?php 
//https://www.c-sharpcorner.com/UploadFile/d0e913/abstract-class-interface-two-villains-of-every-interview/
require_once 'Teacher.php';

$t = new Teacher("Kim","Vestergård","Mogensen");
$t->setClass("ØIOE211");
$t->setClass("opboi20ed601");
echo $t->getClass();
echo $t->__toString();

?>