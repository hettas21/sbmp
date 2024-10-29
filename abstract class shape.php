<?php
// Abstract class Shape
abstract class Shape {
    // Abstract method to calculate area
    abstract public function calculateArea();
}

// Rectangle class that extends Shape
class Rectangle extends Shape {
    private $length;
    private $width;

    // Constructor to initialize length and width
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Triangle class that extends Shape
class Triangle extends Shape {
    private $base;
    private $height;

    // Constructor to initialize base and height
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Implement calculateArea method
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Example usage
$rectangle = new Rectangle(5, 10);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n"; // Output: Rectangle Area: 50

$triangle = new Triangle(4, 8);
echo "Triangle Area: " . $triangle->calculateArea() . "\n";   // Output: Triangle Area: 16
?>