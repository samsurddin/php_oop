<?php 

    class Father 
    {
        protected $name = "Fazlur Rahman";

        private function FatherNm(): void
        {
            echo "The name is {$this->name}<br>";
        }

        protected function display(): void
        {
            $this->FatherNm();
        }
    }

    class Mother extends Father 
    {
        protected $mname = "Samsun Nahir";
        protected function show(): void
        {
            $this->display();
            echo "Name : {$this->mname}<br>";
        }
    }

    class Piyal extends Mother 
    {
        protected $pname = "Samsurddin";

        public function Member(): void
        {
            $this->show();
            echo "Name : {$this->pname}<br>";
        }

    }

    $obj = new Piyal();
    $obj->Member();