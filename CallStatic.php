<?php
class CallStatic {
    public $name;
    private $email;   
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }
    public static function __set_state(array $array) 
    {
        $obj = new CallStatic;
        $obj->name = $array['name'];
        $obj->email = $array['email'];
        return $obj;
    }
}
$objStudent = new CallStatic('John','john@example.com');
var_export($objStudent);
// Output: Student::__set_state(array( 'name' => 'John', 'email' => 'john@example.com', )) 
?>