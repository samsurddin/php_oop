<?php

    class A 
    {
        public $name = "a";
    }
    class B extends A 
    {
        public $email = "a@gmail.com";


    }

    class C extends B 
    {
        public $age=12;

    }

    $obj = new C;
    $obj->name = "piyal";
    $obj->email = "piyal@gamil.com";
    $obj->age = 23;
    echo $obj->name;
    echo "<br>";
    echo $obj->email;
    echo "<br>";
    echo $obj->age;