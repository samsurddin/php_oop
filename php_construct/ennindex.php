<?php

use Piyal as GlobalPiyal;

    class Piyal 
    {

        public $i = 1;
        public $fruit = array("banana","strawberrie","grape","apple","watermelon","oranges","blueberries","lemons");

        public function __construct()
        {
            
            while ($this->i <= 10) {
               echo $this->i++."<br>";
            }

            
        }

    }

    $obj = new Piyal();