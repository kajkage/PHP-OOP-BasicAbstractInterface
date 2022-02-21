<?php

Class Person{

    public string $firstname;
    public string $middlename;
    public string $lastname;
    
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
}


?>