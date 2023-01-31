<?php

class Isset {

    private $data = array();
    
    public function __isset($name) 
    {
        return isset($this->data[$name]);
    }
}

$isSet = new Isset();
echo isset($isSet->phone);

