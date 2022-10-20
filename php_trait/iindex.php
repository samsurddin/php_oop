<?php



    trait Student 
    {
        public $name;
        public $email;
        public $regno;
        public $roll;

        public function __construct(string $name, string $email, int $reg, int $roll)
        {
            $this->name  = $name;
            $this->email = $email;
            $this->regno = $reg;
            $this->roll  = $roll;

            $this->GeTStudentData();
        }

        public function GeTStudentData()
        {
            echo "Name   : {$this->name}<br>";
            echo "Email  : {$this->email}<br>";
            echo "Reg NO : {$this->regno}<br>";
            echo "Roll   : {$this->roll}<br>";
        }
    }

    trait Teacher {
        public $pname;
        public $year;

        public function TeacherEnteredData(string $name,int $year)
        {
            $this->pname = $name;
            $this->year  = $year;
        }

        public function DisplayData()
        {
            echo "Headmaster : {$this->pname}<br>";
            echo "Year       : {$this->year}<br>";
        }

    }

    class NewAvlData 
    {
        use Student;
        use Teacher;
    }

    $Obj = new NewAvlData("Piyal","piyal@gmail.com",111147489,21);
    $Obj->TeacherEnteredData("Habbib",2016);
    $Obj->DisplayData();

