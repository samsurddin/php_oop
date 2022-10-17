<?php 


    class Piyal 
    {
        public $name="Piyal";

        public function GetAlert()
        {
            echo "<script>alert('the name is {$this->name}')</script>";
        }
    }

    $pi = new Piyal();
    $pi->GetAlert();