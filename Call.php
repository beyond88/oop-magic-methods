<?php

class Get {

    public function __call( $methodName, $arguments ) 
    {
        // $methodName = getStudentDetails 
        // $arguments = array('1') 
    }
    
}

$objStudent = new Get();
$objStudent->getStudentDetails(1);
