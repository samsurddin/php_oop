<?php 

    namespace Support;

    class NewUser {
        public $name;
        private $email;
  
  
        public function getServise()
        {
          $this->name = "Piyal";
          $this->email = "Samsurddinahmed@gmail.com";
        }
  
        public function display()
        {
  
            echo "The name is {$this->name}<br>";
            echo "The email is {$this->email}<br>";
        }
    }

    class BulkTo {
        public function Name()
        {
            echo "BulkTo";
        }
    }