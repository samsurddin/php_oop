<?php

    class Services
    {
      public $name;
      private $email;


      public function getServise()
      {
        $this->name = "Piyal";
        $this->email = "Samsurddinahmed@gmail.com";
      }

      public function display()
      {

          echo "The name is {$this->name}<br>";
          echo "The email is {$this->email}<br>";
      }

    }




    $obj = new Services();
    $obj->getServise();
    $obj->display();
 ?>
