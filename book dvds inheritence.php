<?php
// Generic Item class
class Item {
    protected $title;
    protected $year;

    // Constructor for Item
    public function __construct($title, $year) {
        $this->title = $title;
        $this->year = $year;
    }

    // Method to display item information
    public function displayInfo() {
        echo "Title: " . $this->title . "\n";
        echo "Year: " . $this->year . "\n";
    }
}

// Book class that inherits from Item
class Book extends Item {
    private $author;
    private $isbn;

    // Constructor for Book
    public function __construct($title, $year, $author, $isbn) {
        parent::__construct($title, $year);  // Call parent constructor
        $this->author = $author;
        $this->isbn = $isbn;
    }

    // Override displayInfo to include Book details
    public function displayInfo() {
        parent::displayInfo();
        echo "Author: " . $this->author . "\n";
        echo "ISBN: " . $this->isbn . "\n";
    }
}

// DVD class that inherits from Item
class DVD extends Item {
    private $director;
    private $duration; // in minutes

    // Constructor for DVD
    public function __construct($title, $year, $director, $duration) {
        parent::__construct($title, $year);  // Call parent constructor
        $this->director = $director;
        $this->duration = $duration;
    }

    // Override displayInfo to include DVD details
    public function displayInfo() {
        parent::displayInfo();
        echo "Director: " . $this->director . "\n";
        echo "Duration: " . $this->duration . " minutes\n";
    }
}

// Example usage
$book = new Book("The Great Gatsby", 1925, "F. Scott Fitzgerald", "9780743273565");
echo "Book Info:\n";
$book->displayInfo();

echo "\n";

$dvd = new DVD("Inception", 2010, "Christopher Nolan", 148);
echo "DVD Info:\n";
$dvd->displayInfo();
?>