<?php
function divide($numerator, $denominator) {
    try {
        // Check for division by zero
        if ($denominator == 0) {
            throw new Exception("Cannot divide by zero.");
        }
        // Perform division if no exception is thrown
        $result = $numerator / $denominator;
        echo "Result: " . $result . "\n";
    } catch (Exception $e) {
        // Catch and display the exception message
        echo "Error: " . $e->getMessage() . "\n";
    }
}

// Example usage
divide(10, 2);  // Output: Result: 5
divide(10, 0);  // Output: Error: Cannot divide by zero.
?>