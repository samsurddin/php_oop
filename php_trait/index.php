<?php

use User as GlobalUser;

    trait User 
    {
        public $name = "Parson";
        public function Person()
        {
            echo $this->name;
        }
    }

    trait Piyal 
    {
        public $mes = "Hello World";
        public function Hello()
        {
            echo $this->mes;
        }
    }
    trait Student
    {
        public $email = "parson@gmail.com";
        public function Person1()
        {
            echo $this->email;
        }
    }
    trait Teacher 
    {
        public $username = "Piyal";
        public function Person2()
        {
            echo $this->username;
        }
    }

    class NewUser 
    {
        use User,Piyal,Student,Teacher;

        public function Hello()
        {
            // parent::Hello();
            echo "Who I am";
            // parent::Hello();
        }
    }

    $Obj = new NewUser;
    $Obj->Person();
    $Obj->Hello();
    $Obj->Person1();
    $Obj->Person2();