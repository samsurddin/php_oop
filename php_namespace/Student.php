<?php 
 namespace Student;

class User
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