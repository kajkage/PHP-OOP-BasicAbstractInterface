<?php
require_once 'Person.php';

Class Student extends Person{
    private string $class;

    public function setClass($classname)
    {
        $this->class = $classname;
    }
   
    public function getClass():string
    {
        return $this->class;
    }

}
?>