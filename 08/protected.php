<?php
class User
{
    
    private $name = "Piyal";
    protected $roll = 20;


    public function display(): void 
    {
        echo "Name is : {$this->name}<br>";
        echo "Roll is : {$this->roll}<br>";
    }

    protected function test(): void 
    {
        echo "Welcome to test exam";
    }

}

class Student extends User
{

    public function set(): void 
    {
        $this->name = "Samsu";
        $this->roll = 10;
    }

    public function hello(): void
    {
        $this->test();
    }

}

$user = new User;
$user->display();
// $user->test();

echo "</br>";

$std = new Student;
$std->set();
$std->display();
$std->hello();
// $user = new User;
// $user->display();