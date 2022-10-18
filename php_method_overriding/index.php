<?php

    class User 
    {
        public $name;
        public $email;

        public function GetInfo(string $entername, string $enteremail):void
        {
            $this->name  = $entername;
            $this->email = $enteremail;
        }

        public function Show():void
        {
            echo "name : {$this->name}<br>";
            echo "name : {$this->email}<br>";
        }
    }

    class SubUser extends User 
    {
        public $adress;

        public function GetInfo(string $entername, string $enteremail ,string $adress = NULL):void
        {
            parent::GetInfo($entername,$enteremail);
            $this->adress = $adress;
            
        }

        public function Show(): void
        {
            parent::Show();
            echo "Addres : {$this->adress}";
        }

    }

    $nm = "Samsurddin";
    $em = "samsurddin@gmail.com";
    $ct = "Chandpur";
    $obj= new SubUser;
    $obj->GetInfo($nm,$em,$ct);
    $obj->Show($nm,$em);
