<?php

    class Vehicle{

        function display(): void
        {
            echo "This is a vehicle";
        }
        
    }

    class Car extends Vehicle{
         
        function Test(): void
        {
            echo "This is extended class";
        }

    }

    $carobj = new Car();
    $carobj->display();
    $carobj->Test();