<?php

abstract class User 
{
   
    public abstract function ShowData();

    public function GetName():void 
    {
        echo $this->name."<br>";
    }

}

class Student extends User 
{
    public $name = "Piyal Ahmed";

    public function ShowData(): void
    {
        echo "The abstrauct class is use for using php programming <br>";
    }
    
}

$user = new Student;
$user->ShowData();
$user->GetName();