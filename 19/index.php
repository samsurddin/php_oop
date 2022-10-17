<?php

require 'includ.php';

use App\User;
use School\User as StdUser;
use School\Student;


$user = new User();
$user->Get();

echo "<br>";

$std = new StdUser;
$std->UserName();

echo "<br>";

$peo = new Student();
$peo->UserRoll();