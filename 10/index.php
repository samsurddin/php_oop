<?php
 

class User {

    public $name;
    public $email;

    public function __construct(String $uname , String $uemail)
    {
        $this->name = $uname;
        $this->email = $uemail;   
    }

    public function show(): void
    {
        echo "This is name {$this->name}<br>";
        echo "The email is {$this->email}<br>";
        
    }

}

class Student extends User{

    public $roll;

    public function __construct(String $uname, String $uemail, int $roll){

        parent::__construct($uname,$uemail);
        $this->roll = $roll;
    }

    public function show(): void
    {
        parent::show();
        echo "The roll is {$this->roll}";
    }

}

$nm = "piyal";
$em = "piyal@gmail.com";
$rol = 12;


$std = new Student($nm,$em,$rol);
$std->show();


// $user = new User();
// $user->show();