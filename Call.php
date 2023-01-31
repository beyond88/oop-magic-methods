<?php

class Call {

    public function __call( $methodName, $arguments ) 
    {
        // $methodName = getStudentDetails 
        // $arguments = array('1') 
    }
    
}

$objStudent = new Call();
$objStudent->getStudentDetails(1);
