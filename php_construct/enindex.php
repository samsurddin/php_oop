<?php 


    class Country 
    {
        public $clock = 8.00;
        public $title = "piyal";
        public $name = array("United States - $18.62 Tn.",
                             "China - $11.22 Tn.","Japan - $4.94 Tn.",
                             "Germany - $3.48 Tn.",
                             "United Kingdom - $2.65 Tn.",
                             "France - $2.47 Tn.",
                             "India - $2.26 Tn.",
                             "Italy - $1.86 Tn.",
                             "Denmark - $61,063",
                             "Singapore - $59,797",
                             "Canada - $1.53 Tn"
                            );


        public function __construct($clock)
        {
            foreach ($this->name as $allcname) {
                echo "{$allcname}[ TIME -: {$clock} ]<br><br>";
            }
        }


        public function __destruct()
        {
            echo "{$this->title} work hasbeen done !!!";
        }

    }

    $cunty = new Country(1.24 ." AM");