<?php

use Piyal as GlobalPiyal;

    class Piyal 
    {

        public $i = 0;
        public $fruit = array("banana","strawberrie","grape","apple","watermelon","oranges","blueberries","lemons");

        public function __construct()
        {
            
            while ($this->i<count($this->fruit)) {
                $this->i++;
               echo $this->fr++."<br>";
               echo "{$this->fruit}";
            }

            
        }


    }

    $obj = new Piyal();