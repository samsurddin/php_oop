<?php 

    class Customer 
    {

        public $number;
        public $address;
        public $brands;

        public function GeTCustomer(int $cnumber, string $caddress ,string $cbrand):void
        {
            $this->number  = $cnumber;
            $this->address = $caddress;
            $this->brands = $cbrand;
        }


        public function Display():void
        {
            echo "User number : {$this->number} <br>";
            echo "User address : {$this->address} <br>";
            echo "User brands : {$this->brands} <br>";
        }

    }

    class Selles extends Customer 
    {
        public $sellername;
        public $selles;

        public function GeTCustomer(int $cnumber, string $caddress, string $cbrand, string $name=NULL ,int $selles = 100): void
        {
            parent::GeTCustomer($cnumber,$caddress,$cbrand);
            $this->sellername = $name;
            $this->selles = $selles;
        }

        public function Display(): void
        {
            parent::Display();
            echo "Seller name   : {$this->sellername}<br>";
            echo "Seller selles : {$this->selles}<br>";
        }
                      
        public function CallCustomer(): void
        {
            $cnumber = "01969437326";
            $caddress = "Chandpur"; 
            $cbrand = "NewLife";
            $nam = "Piyal";
            $selles = 200;
    
            $this->GeTCustomer($cnumber,$caddress,$cbrand,$nam,$selles);
        }
    }

    $newOBj = new Selles;
    $newOBj->CallCustomer();
    $newOBj->Display();