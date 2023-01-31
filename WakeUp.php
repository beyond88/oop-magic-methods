<?php

class WakeUp { 

	public $name; 
    public $regn; 
    public $gender;

	public function __construct($name = "", $regn = 628, $gender = 'Male')
    { 
		$this->name = $name;
        $this->regn= $regn;
        $this->gender = $gender;
    }
	
	public function __wakeup()
    {
        echo "__wakeup() will be called if the unserialize() method is called outside the class.";
        $this->gender = 'Male';
    }

}
$obj1 = new WakeUp('Karlos'); // Initially assigned.
var_dump(unserialize(serialize($obj1)));

//__wakeup() will be called if the unserialize() method is called outside the class.object(WakeUp)#2 (3) { ["name"]=> string(6) "Karlos" ["regn"]=> int(628) ["gender"]=> string(4) "Male" }


