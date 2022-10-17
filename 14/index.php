<?php

class User 
{

    public $name = "jone";
    public static $message = "This is message";

    public function display(): void
    {
       echo "Name is {$this->name}<br/>";
       echo "The alert is ".self::$message."<br/>"; 
    }

    public static function show(): void
    {
        (new self)->display();
    }

}

$user =  new User;


User::$message = "Change message";

User::show();
$user->display();