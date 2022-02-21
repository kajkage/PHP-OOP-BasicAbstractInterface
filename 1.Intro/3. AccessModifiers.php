<?php

Class Teacher{

    public string $firstname;
    public string $middlename;
    public string $lastname;
    // Encapsulation
    // we make this access modyfier private
    private float $salary;

    public function __toString()
    {
        $rt = 
        $this->firstname."\n".
        $this->middlename."\n".
        $this->lastname."\n".
        (string) $this->salary."\n";
        return $rt; 
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

//intantiating a new teatcher
$t = new Teacher;
$t->firstname = "Kim";
$t->middlename = "Vestergård";
$t->lastname = "Mogensen";
$t->setSalary(500);

//Write data for the new teacher
echo $t->__toString();

// give the teacher a decent rise
$t->setSalary(1000);
// now it is better
echo $t->getSalary()."\n";

//Write data for the new teacher
echo $t->__toString();


?>