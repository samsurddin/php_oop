<?php 

    class Student{

        public $name;
        public $roll;

        function __construct(String $name, int $roll )
        {
            $this->roll = $roll;
            $this->name = $name;
        }

        public function Display(): void
        {
            
            echo "The name {$this->name}</br>";
            echo "The name {$this->roll}";
        }

        function __destruct(){
            echo "</br> Every work has done";
        }
    }


    $stu = new Student("Piyal" ,10);
    $stu->Display();
?>