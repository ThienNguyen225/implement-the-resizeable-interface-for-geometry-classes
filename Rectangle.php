<?php

include_once "Resizeable/Resizeable.php";

class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function setWidth($width){
        $this->width = $width;
    }

    public function getWidth(){
        return $this->width;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function getHeight(){
        return $this->height;
    }

    public function calculateArea(){
        return $this->width * $this->height;
    }

    public function calculatePerimeter(){
        return ($this->width + $this->height) * 2;
    }

    public function display(){
        echo "Width: " . $this->getWidth() ."<br>";
        echo "Height: " . $this->getHeight() ."<br>";
        echo "Area: " . $this->calculateArea() ."<br>";
        echo "Perimeter: " . $this->calculatePerimeter() ."<br>";
    }

    public function resize($randomNumber)
    {
        $this->width += $randomNumber;
        $this->height += $randomNumber;
        echo "Area after resize Width $this->width and Height $this->height is: " . $this->calculateArea();
        echo "Area after resize Width $this->width and Height $this->height is: " . $this->calculatePerimeter();
    }
}