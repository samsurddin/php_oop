<?php 
     
     namespace App\Model;
     use App\User;


     class Student extends User
     {
        
        public $name = "piyal";

        public function GetName()
        {
            echo $this->name;
        }

        function setName()
        {
            parent::setName();
            echo $this->pera;
        }
     } 