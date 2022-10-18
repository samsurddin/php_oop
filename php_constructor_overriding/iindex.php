<?php

    class ParsonalUser 
    {
        public $name;
        public $email;
        public $address;

        public function __construct(string $username, string $useremail, string $address)
        {
            $this->name = $username;
            $this->email = $useremail;
            $this->address = $address;
        }

        public function Display(): void
        {
            echo "Name : {$this->name}<br>";
            echo "email : {$this->email}<br>";
            echo "Address : {$this->address}<br>";

        }

        public function ShowUser(): void
        {
            $this->Display();
        }



    }

    class PublicUser extends ParsonalUser 
    {

        public $gender;
        public $age;

        public function __construct(string $username, string $useremail, string $address,string $gen, string $age)
        {
            parent::__construct($username,$useremail,$address);
            $this->gender = $gen;
            $this->age = $age;

        }

        public function Display(): void
        {
            parent::Display();
            echo "Gender : {$this->gender}<br>";
            echo "Age : {$this->age}<br>";
        }

        

    }

    $uname = "Samsu";
    $uemail = "samsurddinaaa@gmail.com";
    $uaddress = "Chandpur , Bangladesh";
    $gender = "Male";
    $age = 20;
    $obj = new PublicUser($uname,$uemail,$uaddress,$gender,$age);
    $obj->ShowUser();