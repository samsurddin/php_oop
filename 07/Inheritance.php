<?php 

class User{

    public $name;
    public $email;
    public $address;


    function getName()
    {

        return $this->name;

    }
   
}

class Student extends User
{
    public $roll;
    public $class;

}

class Teacher extends User 
{
    public $id;
    public $department;
}