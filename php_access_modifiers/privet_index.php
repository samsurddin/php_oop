<?php

    class Car 
    {
        private $logo = "MK";
        private $name = "Piyal";
        private $limit = "100";


        public function GetCar(): void
        {
            echo "logo = {$this->logo}<br>";
            echo "name : {$this->name}<br>";
            echo "limit : {$this->limit}<br>";
        }
    }

    class NewCar extends Car 
    {

    }

    $obj = new NewCar();
    $obj->GetCar();

    