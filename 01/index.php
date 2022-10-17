<?php 
    class Foo {
        public $color;


        function display(){
            echo "Welcome to Bangladesh </br>";
        }

        function setColor($color){
            $this->color = $color;
        }

        function getColor(){
            echo "Color is : {$this->color}";
        }
    }

    $obj = new Foo();
    $obj->display();
    $obj->getColor();

    $obj->color = "Blue </br>";
    echo $obj->color;
?>

