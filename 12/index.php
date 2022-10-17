<?php 

class User {

    public static $message;
    public static $name;

    public function __construct(String $message, String $name)
    {
        self::$message = $message;
        self::$name    = $name;
    }


    public function ShowData(): void 
    {
        echo self::$message."<br/>";
        echo self::$name."<br/>";
    }

}

class Student extends User{

    public static $roll;

    public function __construct(string $message, string $name, int $roll)
    {
        parent::__construct($message,$name);
        self::$roll = $roll;
    }

    public function ShowData(): void 
    {
        parent::ShowData();
        echo self::$roll;
    }

}
$message = "method User ShowData statically";
$name = "piyal2";
$rol = 1;

$std = new Student($message, $name, $rol);
$std->ShowData();

echo "<br/>";

$message = "method User ShowData cannot be called statically";
$name = "piyal";
$rol = 1;
$user = new User($message,$name, $rol);
$user->ShowData();

