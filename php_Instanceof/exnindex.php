<?php

    class Cart
    {
        public $added;
    }

    class Order
    {
        public $counter;
    }

    class Add 
    {
        public $shopping;
    }


    $cart = new Cart;
    $val =  $cart->added = "top";

    var_dump($cart->added instanceof Cart);

    $order = new Order;

    $order->counter = "0";

    var_dump($order->counter instanceof Order);

    $add = new Add;

    var_dump($add instanceof Add);


