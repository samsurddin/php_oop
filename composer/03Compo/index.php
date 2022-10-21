<?php

    require "vendor/autoload.php";

    use Application\User;
    use Application\model\Student;
    use Application\model\NewStu;

    class ConstChecker
    {
        public const Manage = "Php content checker";
        public const Roll = 52148788;
        
        public function ConCheker()
        {
            echo self::Roll;
            echo "<br>";
            echo self::Manage;
        }
    }

    $Obj = new ConstChecker();
    $Obj->ConCheker();
    echo "<br>";


    $obj = new User;
    echo $obj->CheckComposer();

    // $obj1 = new Student;
    $obj1 = new NewStu("piyal","piyal@gmail.com",20);
    $obj1->StudentData();

    $obj1->BrandSetter();
    $obj1->GetData();
    // $obj1->TextSetter();