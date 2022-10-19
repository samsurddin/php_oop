<?php

use Student as GlobalStudent;

interface StudentFace
{
    public static function StudentSetter();
    public static function StudentData();
    public static function Show();
}

class Student implements StudentFace
{

    public static $name;
    public static $email;

    public static function StudentSetter()
    {
        self::$name = "Samsurddin Ahmed";
        self::$email = "samsurddinahmed@gmail.com";
    }
    public static function StudentData()
    {
        echo self::$name . "<br>";
        echo self::$email . "<br>";
    }
    public static function Show()
    {

        self::StudentSetter();
        self::StudentData();
    }
}

Student::Show();

