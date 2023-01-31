<?php

class Set {
    
    private $data = array();
    
    public function __set($name, $value) 
    {
        $this->data[$name] = $value;
    }
    
}

$objStudent = new Set();

// __set() called 
$objStudent->phone = '0491 570 156';

//we’re trying to set the phone property, which is non-existent. And thus, the __set() method is called. 
//The first argument of the __set() method is the name of the property which is being accessed, and the second argument is the value we’re trying to set.

