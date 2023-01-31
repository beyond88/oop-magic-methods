<?php 

    class CloneStudent { 

        public $gender; 
        public $name; 
        public $reg; 

        public function __construct($name="", $reg=30, $gender='Male') 
        { 

            $this->name = $name;
            $this->reg  = $reg;
            $this->gender  = $gender;

        }
 
        public function __clone()
        {
            echo __METHOD__."you are cloning the object.";
        }
 
    }
 
    $obj = new CloneStudent('Alen Morphy'); // Initially assigned.
    $obj2 = clone $obj;
    
    var_dump('object1:');
    var_dump($obj);
    
    echo '';

    var_dump('object2:');
    var_dump($obj2);
?>