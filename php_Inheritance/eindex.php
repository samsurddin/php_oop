<?php 

    class Member 
    {
        public $name = "SomeOne";
        public $work = "playing Gamne";
        public $frontEnd = "Html";
        public $interested = "full stack developer";

        public function getName()
        {
            echo $this->name,"<br>";
            echo $this->work,"<br>";
            echo $this->frontEnd,"<br>";
            echo $this->interested,"<br>";

        }
    }

    class MoreMem extends Member 
    {
        public $roll = 1;
        public $city = "Chandpur";
        public $backend = "PHP";
        public $working = "Laravel";

        public function getRoll()
        {
            echo $this->roll,"<br>";
            echo $this->city,"<br>";
            echo $this->backend,"<br>";
            echo $this->working,"<br>";


        }

    }

    $obj = new MoreMem;
    $obj->getName();
    $obj->getRoll();
