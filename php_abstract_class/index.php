<?php



    abstract class User 
    {
        public function Hello(): string
        {
            return "Hello World";
        }

        public abstract function Show();

    }

    class Student extends User
    {
        public $name = "piyal";

        public  function Show(){
            return $this->name;
        }
    }

    $obj = new Student();
    echo $obj->Hello();
    echo $obj->Show();
