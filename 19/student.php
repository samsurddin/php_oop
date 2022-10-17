<?php 
 
namespace School;

class User
{
    public $name = "Piyal";
    public function UserName()
    {
       echo "The name is {$this->name}";
    }
}

class Student 
{
    public $roll = 1;

    public function UserRoll(Type $var = null)
    {
       echo "The roll is {$this->roll}";
    }
}