<?php 

    require_once 'Rectangle/Rectangle.php';
    require_once 'Circle/Circle.php';
    require_once 'Triangle/Triangle.php';

    abstract class Figure {
        abstract public function area();
        abstract public function perimeter();
    }

    $shape = new Rectangle(10, 10);
    print_r($shape->area());
    