<?php

class Sleep {

    public $name; 
    public $regn; 
    public $gender;

    public function __construct($name = "", $regn = 628, $gender = 'Male')
    { 
        $this->name = $name;
        $this->regn= $regn;
        $this->gender = $gender;
    }

    public function __sleep()
    {
        echo "__sleep() will be called if the serialize() method is used outside the class.";
        $this->name = base64_encode ($this->name);
        return array('name', 'regn'); 
    }
}

$obj1 = new Sleep('Karlos'); // Assigned a value initially 
echo serialize($obj1);
