<?php

abstract class User
{
    public abstract function get();
}

abstract class Student
{
    public abstract function show();
}

class Main extends User 
{

    public function get(){
        echo "hello";
    }

}

$main  = new Main();
$main->get();