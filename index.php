<?php
include "Resizeable/Resizeable.php";
include "Circle.php";
include "Rectangle.php";
include "Square.php";

$randomNumber = rand(1, 100);
$circle = new Circle(2);
$circle->resize($randomNumber);
echo $circle->calculateArea() . "<br>";
echo $circle->calculatePerimeter() . "<br>";

$rectangle = new Rectangle(4, 4);
$rectangle->resize($randomNumber);
echo $rectangle->calculateArea() . "<br>";
echo $rectangle->calculatePerimeter() . "<br>";

$square = new Square(4);
$square->resize($randomNumber);
echo $square->calculateArea() . "<br>";
echo $square->calculatePerimeter() . "<br>";
