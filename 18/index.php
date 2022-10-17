<?php

trait User {

    public function show()
    {
        echo "<script>alert('Hello world')</script>";
    }

}

trait Student 
{
    private $name = "piyal";

    public function GetName()
    {
        echo $this->name."<br>";
    }
}

trait Data 
{
    private $email = "piyal#gmail.com";
    private $age = 18;

    function __construct(){
        $this->name= "Samsu";
        echo "Emain : {$this->email}<br>";
        echo "Age : {$this->age}<br>";
    }
}
class Allmix 
{
    use User , Student, Data;
    // use Student;
    // use Data;
}

$newobj = new Allmix();
// $newobj->name = "Samsu";
$newobj->show();
$newobj->GetName();