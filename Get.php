<?php

class Get {

    private $data = array();
    
    public function __set($name, $value) 
    {
        $this->data[$name] = $value;
    }
    
    public function __get($name) 
    {
    
        if(isset($this->data[$name])) {
            return $this->data[$name];
        }
        
    }
    
}

$objStudent = new Get();

// __set() called 
$objStudent->phone = '0491 570 156';   

// __get() called 
// Output: 0491 570 156 
echo $objStudent->phone;         
