<?php



    class Student 
    {
        public $name;
        public $email;
        public $roll;
        public $yr;

        function GetStudent(string $stuname, string $stuemail ,int $sturoll ,int $year):void
        {

            $this->name  = $stuname;
            $this->email = $stuemail;
            $this->roll  = $sturoll;
            $this->yr    = $year;

        }
        
        function StudentData():void
        {
            echo "Student name : {$this->name} <br>";
            echo "Student email : {$this->email} <br>";
            echo "Student roll : {$this->roll} <br>";
            echo "Student year : {$this->yr} <br>";
        }


    }

    class Teacher extends Student 
    {
        public $marks;
        public $age;


        function GetStudent(string $stuname, string $stuemail, int $sturoll, int $year ,string $result = NULL, int $age=NULL): void
        {
            parent::GetStudent($stuname,$stuemail,$sturoll,$year);
            $this->marks = $result;
            $this->age = $age;

        }

        function StudentData(): void
        {
            parent::StudentData();
            echo "Student roll : {$this->marks} <br>";
            echo "Student age : {$this->age} <br>";
        }
    }

    $uname = "Piyal";
    $uemail = "piyal1122@gmail.com";
    $uroll = 2;
    $uyear = 2016;
    $uresult = 4.11;
    $uage = 17;

    $obj = new Teacher();
    $obj->GetStudent($uname,$uemail,$uroll,$uyear,$uresult,$uage);
    $obj->StudentData();