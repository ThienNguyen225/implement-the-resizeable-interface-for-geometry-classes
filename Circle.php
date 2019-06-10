<?php

include_once "Resizeable/Resizeable.php";

class Circle implements Resizeable
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius,2);
    }

    public function calculatePerimeter(){
        return $this->radius * 2 * pi();
    }

    public function display(){
        echo "Radius: " . $this->getRadius() ."<br>";
        echo "Area: " . $this->calculateArea() ."<br>";
        echo "Perimeter: " . $this->calculatePerimeter() ."<br>";

    }

    public function resize($randomNumber)
    {
        $this->radius += $randomNumber;
        echo "Area after resize Radius $this->radius is:" . $this->calculateArea();
        echo "Perimeter after resize Radius $this->radius is:" . $this->calculatePerimeter();
    }
}