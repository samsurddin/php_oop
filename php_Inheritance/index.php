<?php

    class Father 
    {
        public $name = "Fazlur Rahmen";
        public $work = "Store";
        public $address = "New Truck Road";
        public $son = "piyal";
        
    }

    class Son extends Father 
    {

    }

    $obj = new Son();
    echo $obj->name;
    echo "<br>";
    echo $obj->work;
    echo "<br>";
    echo $obj->address;
    echo "<br>";
    echo $obj->son;