<?php 
     
     namespace App\Model;

     class Student
     {
        public $name = "piyal";

        public function GetName()
        {
            echo $this->name;
        }
     } 