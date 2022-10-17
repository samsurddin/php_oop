<?php 


    class Overview
    {

        public $name="piyal";
        public $roll=10;


        public function A()
        {
            // this retrun current object value
           return $this->name;
        }

        public function B()
        {
            // this retrun current object value

            return $this->roll;
        }


    }

    $obj = new Overview();
    echo $obj->A();
    echo $obj->B();