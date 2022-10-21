<?php 

    namespace Application\model;

    

    class NewStu extends Student 
    {
        public $roll;
        

        public function StudentData()
        {
            parent::StudentData();
            echo "roll is : {$this->roll}<br>";
        }

        public function __construct(string $name, string $email,int $roll)
        {
            parent::__construct($name, $email);
            $this->roll = $roll;
            
        }

    }