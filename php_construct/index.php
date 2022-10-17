<?php

    class AllUser 
    {
        public $name = "piyal";

        public $fruit = array("banana","strawberrie","grape","apple","watermelon","oranges","blueberries","lemons");


        public function __construct()
        {
            if ($this->fruit == NULL)
            {
                echo "fruite is emty ??";
            }
            else
            {
              for ($i = 0; $i < count($this->fruit); $i++) 
                { 
                  echo "the name of fruit {$this->fruit[$i]} this is create by {$this->name}<br>";
                }
            }
            
        }


    }

    $ue = new AllUser();