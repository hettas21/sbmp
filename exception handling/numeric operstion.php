<?php
function performOperation($num1, $num2, $operation) {
    try {
        switch ($operation) {
            case 'add':
                return $num1 + $num2;
            case 'subtract':
                return $num1 - $num2;
            case 'multiply':
                return $num1 * $num2;
            case 'divide':
                if ($num2 == 0) {
                    throw new Exception("Division by zero is not allowed.");
                }
                return $num1 / $num2;
            default:
                throw new Exception("Unsupported operation");
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
        return null;
    }
}

// Main program flow
while (true) {
    $num1 = (float)readline("Enter the first number: ");
    $num2 = (float)readline("Enter the second number: ");
    $operation = readline("Enter operation (add, subtract, multiply, divide) or 'exit' to quit: ");
    
    if ($operation === 'exit') {
        echo "Exiting the program.\n";
        break;
    }
    
    // Check if operation is valid before calling performOperation
    if (!in_array($operation, ['add', 'subtract', 'multiply', 'divide'])) {
        echo "Error: Unsupported operation. Please try again.\n";
        continue;  // Skip to the next iteration without calling performOperation
    }

    $result = performOperation($num1, $num2, $operation);
    
    // Only display result if operation was successful
    if ($result !== null) {
        echo "Result: $result\n";
    }
}
