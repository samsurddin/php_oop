<?php

    class Home 
    {
        public $country;
        public $city;


        public function __construct(string $country, string $city)
        {
            $this->country = $country;
            $this->city = $city;
        }

        public function HomeDtls(): void
        {
            echo "Country is : {$this->country}<br>";
            echo "City is    : {$this->city}<br>";
        }
    }

    class NewHome extends Home 
    {
        public $zilla;
        public $postCode;

        public function __construct(string $country, string $city , string $zil ,int $postcode)
        {
            $this->zilla = $zil;
            $this->postCode = $postcode;
            parent::__construct($country,$city);
        }

        public function HomeDtls(): void
        {
            parent::HomeDtls();
            echo "Zilla is : {$this->zilla}<br>";
            echo "Post Code is    : {$this->postCode}<br>";
        }

    }

    $obj = new NewHome("Bangladesh","Chandpur","chandpur",3600);
    $obj->HomeDtls();