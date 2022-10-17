<?php



    class User
    {
        public $name;
        public $email;
        public $age;
        public $work;


    }

    class Topuser extends User
    {

        public function __construct(string $uname, string $uemail,int $uage,string $uwork)
        {
            $this->name   = $uname;
            $this->email  = $uemail;
            $this->age    = $uage;
            $this->work   = $uwork;
        }


        public function show(): void
        {
            echo "Name is : {$this->name}<br>";
            echo "Email is : {$this->email}<br>";
            echo "Age is : {$this->age}<br>";
            echo "Working as : {$this->work}<br>";
        }
    }

    $nm = "piyal";
    $ml = "Piyal@GMAIl.com";
    $ag = 24;
    $wk = "Developer";

    $obj = new Topuser($nm,$ml,$ag,$wk);
    $obj->show();