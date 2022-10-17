<?php
     class Cars 
     {
        public $price = 125000;
        public $name   ="Tata";
        private $engine = "Hyundai Creta";
        protected $battery = "dell";
        protected $radiator = "automobile";

        private $owner;
        public $email = "company@gmail.com";
        private $phone;
        public $age;

        private function Get():void
        {
            echo "The engine name only for company staf {$this->engine}";
        }

        protected function GetEngine():void 
        {
            $this->Get();
        }

        protected function oWner(string $ownernm, int $ownerPh):void 
        {
            $this->owner = $ownernm;
            $this->phone = $ownerPh;
            
        }

        protected function show():void 
        {
            echo "The Owner of company is {$this->owner}<br>";
            echo "Owner phone number :{$this->phone}<br>";
        }

     }

     class NewCarbranch extends Cars
     {
        public function GetData(): void 
        {
            echo "The name is {$this->name}<br>";
            echo "Price {$this->price}<br>";
            echo "Car battery name {$this->battery}<br>";
            echo "Car radiator name {$this->radiator}<br>";
            echo "Company email {$this->email}<br>";
            // echo "Car radiator name {$this->age}<br>";
            $this->GetEngine();
            $this->oWner("piyal","01969437326");
            echo "<br>";
            $this->show();
            
        }
     } 

     $obj =  new NewCarbranch();
     $obj->GetData();
     