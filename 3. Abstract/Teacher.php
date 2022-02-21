<?php
require_once 'Person.php';

Class Teacher extends Person
{
    private $class = Array();
    private float $salary;
    
    public function setClass($classname)
    {
        
        array_push($this->class ,$classname);
    }
    //returning a string formatted as csv
    public function getClass():string
    {
        $s="";
        foreach ($this->class as $class)
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