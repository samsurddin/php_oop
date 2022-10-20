<?php 

    require "vendor/autoload.php";

    use App\User;
    
    use App\Model\Student;


    $Obj = new User;
    echo "<br>";
    $obj2 = new Student;
    $obj2->GetName();
    $obj2->setName();