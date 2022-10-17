<?php

  class ColorSeter
  {

    public $color ;
    public $name;
    public $price;


    private $address="Dhaka ,Bangladesh";


    public function car()
    {


      echo "the name of car {$this->name}<br>";
      echo "the name of car {$this->color}<br>";
      echo "the name of car {$this->price}<br>";

    }

    public function getAddress()
    {
      echo "The adress is {$this->address}";
    }


    public function theAlert(){
        echo "<script>alert('Hello this is class practice')</script>";
    }



  }




  class Phpdoc
  {

    private $msg = "PHP is a general-purpose scripting language geared toward web development.
    [5] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.
    [6] The PHP reference implementation is now produced by The PHP Group.
    [7] PHP originally stood for Personal Home Page,
    [6] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[8]";

    public $yr = 1994;


    public function getMsg()
    {
        echo $this->msg."<br>";
    }

    public function display()
    {
        $this->getMsg();
        echo "The year is {$this->yr}<br>";
    }

  }

$wk = new Phpdoc();
echo "<br>";
$wk->display();

echo "<br>";


$car = new ColorSeter();
$car->name = "BMW";
$car->color = "Black";
$car->price = "125000000";

$car->car();
$car->getAddress();
$car->theAlert();


 ?>
