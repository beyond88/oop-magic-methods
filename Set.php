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

