<?php



    abstract class Member
    {
        public $name;
        public $work;
        public function MemberName()
        {
            $this->name = "Piyal";
            $this->work = "Student";
        }

        public abstract function Alert();
        public abstract function GetMessage();

    }

    class NewMember extends Member
    {

        public $host;
        public $username;
        public $message="Windows PowerShell Copyright (C) Microsoft Corporation. All rights reserved.Try the new cross-platform PowerShell";

        public function __construct()
        {
            $this->MemberName();
            echo "name :{$this->name} <br>";
            echo "work :{$this->work} <br>";
            echo $this->GetMessage();
            $this->Alert();
        }

        public function Alert()
        {
            $this->host = "Localhost";
            $this->username = "root";
            echo "<script>alert('$this->host')</script>";
            echo "<script>alert('$this->username')</script>";
        }

        public function GetMessage()
        {
            return $this->message;
        }
    }

    $Onj = new NewMember();