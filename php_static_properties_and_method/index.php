<?php



    class Student 
    {
        # Static properties 

        public static $name;
        public static $email;

        # -----------------

        function __construct(string $uname,string $uemail)
        {
            
            self::$name  = $uname;
            self::$email = $uemail;

        }

        function GetStudent()
        {
            echo self::$name."<br>";
            echo self::$email."<br>";
        }
    }

    $Obj = new Student("piyal","piyal@gaail.com");
    $Obj->GetStudent();