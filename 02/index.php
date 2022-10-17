<?php 
 class Vehicle
    {

    public $name = "FS";
    public $color ="Blue";
    public $price;

    function SetNameColor( string $name, string $color, int $price = 1000): void
    {
        $this->name  = $name;
        $this->color = $color;
        $this->price = $price;
    }

    function display(): void
    {
        echo "The name is : {$this->name}</br>";
        echo "The color is : {$this->color}</br>";
        echo "The price is : {$this->price}</br>";
    }


    function getName(): string
    {
        return $this->name;
    }
 }


 $vehicle = new Vehicle;
//  $vehicle->name = "Bus";
//  $vehicle->color = "Green";

//  echo "The name is : ".$vehicle->name ."</br>";
//  echo "The Color is : ".$vehicle->color ."</br>";

$vehicle->display();

echo "<br>";

$vehicle->SetNameColor("BMW","Red");
$vehicle->display();

echo "<br>";

$newobj = new Vehicle;

$nm="corola";
$co = "Green";
$pe = 1500;

$newobj->SetNameColor($nm,$co,$pe);

$newobj->display();

echo "</br>";

echo $vehicle->getName();
?>