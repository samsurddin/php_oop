<?php



    class Users 
    {

        public $name;

    }

    class Student 
    {

        public $email;

    }

    class Locale 
    {

        public $password;

    }



    $objuser = new Users;
    $objstud = new Student;
    $objloca = new Locale;

    var_dump($objloca instanceof Locale);
    echo "<br>";
    var_dump($objstud instanceof Student);
    echo "<br>";
    var_dump($objuser instanceof Users);
    echo "<br>";
    var_dump($objloca instanceof Student);
    echo "<br>";
    var_dump($objstud instanceof Users);
    echo "<br>";
    var_dump($objuser instanceof locale);