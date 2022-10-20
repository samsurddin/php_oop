<?php 
     
     interface Teacher 
     {
        public function GeTInfo();
        public function SetInfo(string $name,string $email,string $address,string $subject);
        public function ShowInfo();

        
     }

     class NewTeacher implements Teacher 
     {

        public $name;
        public $email;
        public $address;
        public $subject;


        public function SetInfo(string $name,string $email,string $address,string $subject)
        {
            $this->name = $name;
            $this->email = $email;
            $this->address = $address;
            $this->subject = $subject;
        }

        public function GeTInfo()
        {
            echo "Teacher name : {$this->name} <br>";
            echo "Teacher email : {$this->email} <br>";
            echo "Teacher address : {$this->address} <br>";
            echo "Teacher subject : {$this->subject} <br>";
        }
        

        public function ShowInfo()
        {
            $this->GeTInfo();
        } 
     }

     class Teachers extends NewTeacher 
     {
        public function ShowInfo()
        {
            $aname = "Kawsir Khan";
            $bname = "piyal@gmailcom";
            $cname = "Chandpur";
            $dname = "PHP";
            $this->SetInfo($aname,$bname,$cname,$dname);
            parent::ShowInfo();
        }
     }

     $obj = new Teachers();
     $obj->ShowInfo();