<?php

Class Teacher{

    public string $firstname;
    public string $middlename;
    public string $lastname;
    private float $salary;

    //Class constructor
    public function __construct($firstname, $middlename, $lastname)
	{
		$this->firstname = $firstname;
        $this->middlename = $middlename;
        $this->lastname = $lastname;
    }

    //Class destructor
    //Usually we don't need to be explict about, the garbage collector
    //will do the work no matter what
    function __destruct() {
        echo "The teacher is being removed{$this->__toString()}.";
        // sometimes you will see 
        // files and connections being closed 
        // inside the destruct body
      }



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
$t = new Teacher("Kim","Vestergård","Mogensen");
$u = new Teacher("Martin","Edwin","Nielsen"  );
//Write data for the new teacher
echo $t->__toString();
echo $u->__toString();
//Fatal error: Uncaught Error: Typed property Teacher::$salary must not be accessed before initialization


?>