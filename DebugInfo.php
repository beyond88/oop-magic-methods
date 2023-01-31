<?php

class DebugInfo{

    public $employee;
    private $email;
    private $eno;

    public function __debugInfo()
    {
        return [ 'Employee_Name' => $this->employee ];
    }

}
 
$obj4 = new DebugInfo();
var_dump($obj4);

//object(DebugInfo)#1 (1) { ["Employee_Name"]=> NULL }