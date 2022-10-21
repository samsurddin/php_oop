<?php
    namespace Application\model;

    abstract class HasanAli {
        public  function Text(){
            echo "i am abstract class";
        }
    }

    interface StudentUser {
        public function StudentData();
    }

    

    trait NewBrand 
    {
        public $brand;
        public $price;


        public function BrandSetter()
        {
            $this->brand = "Dell";
            $this->price = 52000;
        }

        public function GetData():void
        {
            echo "Brand Name    : {$this->brand}<br>";
            echo "Product Price : {$this->price}<br>";
        }

    }

    class Student extends HasanAli implements StudentUser  {
        use NewBrand;

        protected $name;
        protected $email;

        public static $message = "Mix Oop lessons";

        public static function TextSetter()
        {
            echo self::$message;
        }

        public function __construct(string $name,string $email)
        {
            $this->name = $name;
            $this->email = $email;
        }

        public function StudentData()
        {
            echo "name is : {$this->name}<br>";
            echo "email is : {$this->email}<br>";
            echo "<br>";
            $this->Text();
            echo "<br>";
            Student::TextSetter();
            
        }

        

    }