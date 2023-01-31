<?php

    class Invoke {

        private $name;
        private $email;

        public function __construct($name, $email) 
        {
            $this->name = $name;
            $this->email = $email;
        }

        public function __invoke()
        {
            echo 'Student object is called as a function!';
        }

    }

    $objStudent = new Invoke('John', 'john@example.com');
    $objStudent();
?>