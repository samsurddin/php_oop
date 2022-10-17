<?php 

    class Worker {
        public $name;
    }

    class Student {

    }
    $obj = new Worker();

    $stu = new Student();

    var_dump($obj instanceof Worker);
     
    if($obj instanceof Worker){
        echo "This is instance of Worker";
    }

    if($stu instanceof Student){
        echo "This is instance of Student";
    }


?>