<?php

 interface UserInterface 
 {

    public function getName();
    public function display();
    public function setName($nme);

 }

 class User implements UserInterface 
 {

    public $name = "Samsurddin Ahmed Rabbane";

    public function getName(): string
    {

        return $this->name."<br>";

    }

    public function display(): string
    {

        return $this->name."<br>";

    }

    public function setName($nme): string
    {
        return $this->name = $nme;
    }
 }

 $user = new User();
 echo $user->setName("Piyal");
 echo $user->getName();

 echo $user->display();
