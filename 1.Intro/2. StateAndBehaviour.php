<?php

Class Teacher{
    //state. 
    //Attribuets descibes different aspects of the object
    public string $firstname;
    public string $middlename;
    public string $lastname;
    public float $salary;


    //Behaviour
    //methods are thing the objects can do
    public function __toString()
    {
        $rt = 
        $this->firstname."\n".
        $this->middlename."\n".
        $this->lastname."\n".
        (string) $this->salary."\n";
        return $rt; 
    }
}


$t = new Teacher;
$t->firstname = "Kim";
$t->middlename = "Vestergård";
$t->lastname = "Mogensen";
$t->salary = 500;

echo $t->__toString()

?>