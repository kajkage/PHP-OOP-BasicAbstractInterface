<?php
require_once 'Person.php';

Class Teacher extends Person{
    private float $salary;
    private $classes = Array();

    public function setClass($classname)
    {
        
        array_push($this->classes ,$classname);
    }

    public function getClass()
    {
        $s="";
        foreach ($this->classes as $class)
        {   
            $s .= $class.";";
        }
        return $s;
    }

    public function getSalary()
    {
        // do some security stuff
        return $this->salary;
    }

    public function setSalary($salary)
    {
        // do some security stuff
        $this->salary = $salary;
        return $this;
    }
}
?>