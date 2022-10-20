<?php
    require "User.php";
    require "Student.php";
    require "Support.php";

    use Student\User as StdUser;    
    use App\User;
    use Support\NewUser;
    use Support\BulkTo;



    $obj = new User();
    $obj->FunctionName();

    $obj1 = new StdUser();
    $obj1->display();

    $obj2 = new NewUser;
    $obj2->getServise();
    $obj2->display();

    $obj3 = new BulkTo;
    $obj3->name();