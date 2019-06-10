<?php

include_once "Resizeable/Resizeable.php";

class Square implements Resizeable
{
    public $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function calculateArea()
    {
        return $this->width * $this->width;
    }

    public function calculatePerimeter()
    {
        return $this->width * 4;
    }

    public function display()
    {
        echo "Weight: " . $this->getWidth() . "<br>";
        echo "Area: " . $this->calculateArea() . "<br>";
        echo "Perimeter: " . $this->calculatePerimeter() . "<br>";
    }

    public function resize($randomNumber)
    {
        $this->width += $randomNumber;
        echo "Area after resize Width $this->width is: " . $this->calculateArea();
        echo "Area after resize Width $this->width is: " . $this->calculatePerimeter();
    }
}