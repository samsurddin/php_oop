<?php



class Student
{

    const Student = "Piyal Ahmed";
    const Roll = "20";
    const Address = "Chandpur";

    const AGE = "23";
    const NUMBER = "0196947326";

    function __construct()
    {
        echo self::Student . "<br>";
        echo self::Roll . "<br>";
        echo self::Address . "<br>";
    }


    function NewOne()
    {
        echo Self::AGE."<br>";
        echo Self::NUMBER."<br>";
    }
}

$obj = new Student;
$obj->NewOne();

