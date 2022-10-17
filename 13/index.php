<?php

class User
{
    public static $name = "Jone deo";

    public static function display()
    {
        // $obj = new User;
        echo "Welcome to User Class <br/>";
        echo "Name is : ".self::$name."<br/>";
    }
}

class Student extends User{


}

User::display();

Student::display();