<?php



    class Piyal 
    {
        public $address;

        public function Name()
        {
            
        }
    }

    
    class Samsurddin
    {
        public $address;
    }


    class Ahmed
    {
        public $roll = 1;
    }



    $nm1 = new Piyal();

    $chk = $nm1->Name();

    $nm2 = new Samsurddin();

    $nm3 = new Ahmed();
    $nm3->roll;

    // instance not working;
    var_dump($nm3->roll instanceof Ahmed);
    echo "<br>";

    // -----------------------
    var_dump($nm1 instanceof Piyal);
    echo "<br>";
    var_dump($nm2 instanceof Piyal);
    echo "<br>";
    var_dump($nm2 instanceof Samsurddin);


