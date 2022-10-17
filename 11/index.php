<?php

 class User {

    const MESSAGE = "Welcome to const Class";
    public $name;

    public function show(): void
    {
        echo self::MESSAGE;
    }

 }

 $user = new User;
 $user->name = "Jone Deo <br>";
 echo "<br/>";
$user->show();
echo "<br/>";
 echo $user->name; 
//  echo User::MESSAGE; 
