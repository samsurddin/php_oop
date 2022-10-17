<?php 
    class Foo{

        function display(): void
        {

            echo "This is Foo </br>";

        }
    }

    class Bar extends Foo{

        function school(): void 
        {

            echo "Welcome to school </br>";

        }
    }

    class Student extends Bar{

        function name(): void 
        {

            echo "this is name";

        }

    }

    $sUser = new Student;
    $sUser->display();
    $sUser->school();
    $sUser->name();

?>