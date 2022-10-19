<?php



    class User 
    {
        const MESSAGE = "You can check now !!";
        const DB = "Localhost";
        const Name = "Root";
        const Password = "Password";


        public $email = "samsurddin@gmail.com";

        public function Display(): void
        {
            echo self::MESSAGE."<br>";
            echo self::DB."<br>";
            echo self::Name."<br>";
            echo self::Password."<br>";
            echo $this->email;
        }
    }

    echo User::MESSAGE;

    $obj = new User;
    echo "<br>";
    $obj->Display();
    

