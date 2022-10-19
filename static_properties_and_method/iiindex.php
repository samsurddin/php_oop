<?php



    class Student 
    {

        # public static $name= NULL;
        # public static $age = NULL;
        # public static $roll = NULL;

        public static $name;
        public static $age;
        public static $roll;


         public static function NewStystem(string $usname,int $usage,int $usroll): void
         {
            if((self::$name == NULL)||(self::$age == NULL) || (self::$roll == NULL)){
                self::$name = $usname;
                self::$age = $usage;
                self::$roll = $usroll;
            }else
            {
                echo "No data are avilable";
                 echo self::$name;
                 echo self::$age;
                 echo self::$roll;
            }
         }

         public static function GeTData(): void
         {
            echo self::$name."<br>";
            echo self::$age."<br>";
            echo self::$roll."<br>";
         }

    }

    class NewData extends Student
    {
        public static $year;
         
        public static function NewStystem(string $usname, int $usage, int $usroll,int $yr=NULL): void
        {
            parent::NewStystem($usname, $usage, $usroll);
            if (self::$year == NULL) {
                self::$year = $yr;
            }
        }

        public static function GeTData(): void
        {
            parent::GeTData();
            echo self::$year."<br>";
        }


    }

    $obj = new NewData();
    $obj->NewStystem("piyal",20,1,2016);
    # $obj->NewStystem("",1,0,0);
    $obj->GeTData();