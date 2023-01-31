<?php

class ToString {

    private $name;
    private $email;

    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function __toString()
    {
        return 'Student name: '.$this->name
        . '<br>'
        . 'Student email: '.$this->email;
    }
}

$objStudent = new ToString('John', 'john@example.com');
echo $objStudent;

//Student name: John<br>Student email: john@example.com#                                                                                                     