<?php
function getValidIntegerInput() {
    while (true) {
        $input = readline("Please enter an integer: ");
        try {
            // Check if the input is numeric
            if (!is_numeric($input)) {
                throw new Exception("Invalid input. Please enter a valid integer.");
            }
            // Convert input to integer
            $number = (int)$input;
            return $number;
        } catch (Exception $e) {
            // Catch and display the exception message
            echo $e->getMessage() . "\n";
        }
    }
}

function performCalculation($number) {
    // Example calculation: squaring the number
    $result = $number * $number;
    echo "The square of $number is $result.\n";
}

// Main program flow
$integerInput = getValidIntegerInput();
performCalculation($integerInput);
?>