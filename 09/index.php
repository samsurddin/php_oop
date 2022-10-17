<?php 

class User {

     public $name;
     public $address;


     public function setValue(String $name , String $address):void
     {
        $this->name = $name;
        $this->address = $address;
     }
     

     public function ShowValue():void
     {
       echo "The name is : {$this->name}<br>";
       echo "The address is : {$this->address}<br>";
     }

}

class Student extends User{
    
    public $roll;
    
    public function setValue(String $name , String $address, int $roll = 5): void
    {
        parent::setValue($name ,$address);
        $this->roll = $roll;
        
    }

    public function ShowValue(): void
    {
        echo "The student name <br>";
        echo "The roll is : {$this->roll} <br>";
        parent::ShowValue();
    }
}

class Teacher extends User{

    public function ShowValue(): void
    {
        echo "Teachers name <br>";
        parent::ShowValue();
    }

}

$std = new Student;
$std->setValue("Piyal","Chandpur",10);
$std->ShowValue();

echo "<br>";

$td = new Teacher;
$td->setValue("Gofur","Dhaka"); 
$td->ShowValue();