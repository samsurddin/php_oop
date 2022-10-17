<?php


    class NewMember 
    {
        public $name = "piyal";
        public $workingroll = "developer";
        public $year = "4 yr";
        public $age = 24;
        
        
        public function __construct()
        {
            echo "The name : {$this->name}<br>";
            echo "The roll : {$this->workingroll}<br>";
            echo "The year : {$this->year}<br>";
            echo "The age : {$this->age}<br>";
        }
    }

    class Member extends NewMember 
    {

        public $cnam = "Tormuz Soft";
        public $owner = "Kawsir Ahmed";
        public $work = "Creating a new developer";

        public function getData()
        {
            echo "The company name is {$this->cnam} <br>";
            echo "The company owner name is {$this->owner} <br>";
            echo "The company work is {$this->work} <br>";
        }


        public function __destruct()
        {
            echo "Member all data is here !!";
        }



    }

    $obj = new Member;
    $obj->getData();