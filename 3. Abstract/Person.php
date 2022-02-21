<?php

abstract Class Person{

    protected string $firstname;
    protected string $middlename;
    protected string $lastname;
    
    //Class constructor
    public function __construct($firstname, $middlename, $lastname)
    {
        $this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }
    public function __toString()
    {
        $rt = 
        $this->firstname."\n".
        $this->middlename."\n".
        $this->lastname."\n";

        return $rt; 
    }

    abstract public function setClass($classname);
    abstract public function getClass():string;
}

?>