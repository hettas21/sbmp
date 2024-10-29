<?php
// Interface Resizable
interface Resizable {
    public function resize($factor);
}

// Square class that implements Resizable
class Square implements Resizable {
    private $sideLength;

    // Constructor to initialize side length
    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    // Method to calculate area
    public function calculateArea() {
        return $this->sideLength * $this->sideLength;
    }

    // Implement resize method
    public function resize($factor) {
        $this->sideLength *= $factor;
    }

    // Getter for side length
    public function getSideLength() {
        return $this->sideLength;
    }
}

// Example usage
$square = new Square(5);
echo "Original Area: " . $square->calculateArea() . "\n";  // Output: Original Area: 25

// Resize the square by a factor of 2
$square->resize(2);
echo "New Side Length: " . $square->getSideLength() . "\n";  // Output: New Side Length: 10
echo "New Area: " . $square->calculateArea() . "\n";          // Output: New Area: 100
?>