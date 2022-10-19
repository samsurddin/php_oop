<?php



    interface UserInterface 
    {
        public function Getshow();
        public function Set();
    }

    class User implements UserInterface
    {
        public function Getshow():void
        {
           echo "hello";
        }
        public function Set():void
        {
           echo "Hello set";
        }
    }

    $obj = new User();
    $obj->Getshow();
    $obj->Set();