<?php



    abstract class Student 
    {
        public abstract function display();
        public abstract function set(string $name,string $email);
        public abstract function show();

    }

    class NewStudent extends Student 
    {

        public $name;
        public $email;

        
        public function display()
        {
            echo "Name  : {$this->name}<br>";
            echo "Email : {$this->email}<br>";
            
        }
        public function set(string $name,string $email)
        {
            $this->name = $name;
            $this->email = $email;
        }

        public function show()
        {
            $nm =  "do you want";
            $em = "do@gmail.com";
            $this->set($nm,$em);
        }

    }
      
    $obj = new NewStudent();
    $obj->show();
    $obj->display();