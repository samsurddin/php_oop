<?php



class Teacher
{
    # Static Properties .

    public static $name;
    public static $classsift;
    public static $subject;

    # ----------------

    public function __construct(string $name, string $sift, string $sub)
    {

        self::$name      = $name;
        self::$classsift = $sift;
        self::$subject   = $sub;
    }
    # Static method .

    public static function GetTeacherClass()
    {
        echo self::$name . "<br>";
        echo self::$classsift . "<br>";
        echo self::$subject . "<br>";
    }

    # -------------


}

class Student extends Teacher
{
    public static $stage;
    public static $sttime;

    public function __construct(string $name, string $sift, string $sub, string $age, string $time)
    {
        parent::__construct($name, $sift, $sub);
        self::$stage = $age;
        self::$sttime = $time;
    }

    # Static method .
    public static function GetTeacherClass()
    {

        parent::GetTeacherClass();
        echo self::$stage . "<br>";
        echo self::$sttime . "<br>";
    }

    # -------------

}

$tnm = "Who";
$tcls = "Ten";
$tsub = "English";
$age = 20;
$time = 1.00;

$Obj = new Student($tnm, $tcls, $tsub, $age, $time);
$Obj->GetTeacherClass();
