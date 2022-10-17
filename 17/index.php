<?php

interface User 
{
    public function get();
}

interface Student 
{
    public function show();
}


class Mix implements user , student
{
    public function get()
    {
        echo "Allah helping Samsurddin ahmed <br>";
    }

    public  function show()
    {
        echo "The biggest php programmer";
    }
}

$mix = new Mix();
$mix->get();
$mix->show();