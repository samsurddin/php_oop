<?php

class Student {

    private $name = "Jone";


    public function setName(string $name): void
    {
        $this->name =  $name;
    }

    public function display(): void 
    {
        $this->text();
        $this->hello();
        echo "Student Name is : {$this->name}</br>";
    }

    private function text(): void 
    {
        echo "Welcome to text </br>";
    }

    public function hello(): void 
    {
        echo "hello </br>";
    }

}

$obj = new Student();
// $obj->name = "Jone deo";
$obj->setName("Piyal");

$obj->display();
// $obj->text();