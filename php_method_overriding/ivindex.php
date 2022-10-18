<?php 

    class Store 
    {
        public $name;
        public $trad;
        public $tax;
        public $bills;

        public function GeTStoreDetails(string $stname ,string $tradli ,string $govTax,int $govbill):void
        {
            $this->name = $stname;
            $this->trad = $tradli;
            $this->tax = $govTax;
            $this->bills = $govbill;
        }

        public function Display():void
        {
            echo "Store name  : {$this->name}<br>";
            echo "Store trade license  : {$this->trad}<br>";
            echo "Store tax   : {$this->tax}<br>";
            echo "Store bills : {$this->bills}<br>";
        }

        public function ShowStoreInfo():void
        {
            $this->Display();
        }

    }
    class NewStore extends Store 
    {
        public $monthlytax;
        public $wordNo;

        public function GeTStoreDetails(string $stname, string $tradli, string $govTax, int $govbill,int $retax=NULL,int $word=NULL): void
        {
            
            parent::GeTStoreDetails($stname ,$tradli ,$govTax,$govbill);
            $this->monthlytax = $retax;
            $this->wordNo = $word;

        }

        public function Display(): void
        {
            parent::Display();
            echo "Store monthly tax  : {$this->monthlytax}<br>";
            echo "Store under word  : {$this->wordNo}<br>";
        }

        public function SetValueStore(): void
        {
            $sname = "Samsu";
            $strad = "Samsu LTD";
            $stax = "1550";
            $sbil = "4000";
            $sretax = "300";
            $sword = "10";

            $this->GeTStoreDetails($sname,$strad,$stax,$sbil,$sretax,$sword);

        }


        public function __construct()
        {
            $this->SetValueStore();

            $this->ShowStoreInfo();
            
        }

    }

    new NewStore();