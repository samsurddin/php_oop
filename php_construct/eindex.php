<?php


    class User 
    {
        public $name;
        public $email;
        private $age = "30";

        public function __construct(string $name , string $email)
        {
            $this->name = $name;
            $this->email = $email;

            $this->get();
        }

        public function show(): void
        {
           echo "name is : {$this->name}<br>";
           echo "email is : {$this->email}<br>";
        }

        public function get(): void
        {
            echo "the age is : {$this->age}<br>";
        }


        public function __destruct()
        {
            echo "All code hasbeen running...";
        }

        

    }

    $user = new User("piyal","piyal@gmail.com");
    $user->show();