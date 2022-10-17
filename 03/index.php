<?php 
    class Student
    {
        public string $name;
        public int $roll;


        function getName(): string
        {
            return $this->name;
        }

        function getRoll(): ?int
        {
            return $this->roll;
        }

        function display(): void
        {
            echo "Name is : {$this->name}</br>";
            echo "Roll is : {$this->roll}</br>";
        }
    }

    // Create object for call class values and method

    $stu = new Student;
    
    // set value for class properties 

    $stu->name = "Piyal";
    $stu->roll = 1;

    // Calling the method for show the output

    $stu->display();



    
    



?>