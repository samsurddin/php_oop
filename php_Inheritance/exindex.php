<?php



    class Father 
    {
        public $name = "Fazlur Rahman";
        public $work = "Store";
        public $address = "New Truck Road";
        public $son = "piyal";

        public function getFatherInfo()
        {
            echo "The name : {$this->name}<br>";
            echo "The work : {$this->work}<br>";
            echo "The address : {$this->address}<br>";
            echo "The age : {$this->son}<br><br>";
        }
    }
    class Son extends Father 
    {
        public $sname = "Samsurddin Ahmed Rabbane";
        public $swork = "web-developer";
        public $saddress = "New Truck Road";
        

        public function getSonInfo()
        {
            echo "The name : {$this->sname}<br>";
            echo "The work : {$this->swork}<br>";
            echo "The address : {$this->saddress}<br>";
            
        }
    }

    class Mother extends Son
    {
        public function __construct()
        {
            $this->getFatherInfo();
            $this->getSonInfo();
        }
    }

    

    $obj = new Mother;
    // $obj->getSonInfo();
    