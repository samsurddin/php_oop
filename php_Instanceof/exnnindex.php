<?php

    class Publicly 
    {

    }
    class Indoor 
    {

    }

    class Outdoor 
    {

    }

    $obj = new Publicly;
    var_dump($obj instanceof Publicly);
    $obj1 = new Indoor;
    var_dump($obj1 instanceof Indoor);
    $obj2 = new Outdoor;
    var_dump($obj2 instanceof Outdoor);