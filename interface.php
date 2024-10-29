<?php
// Define InterfaceA with methodA
interface InterfaceA {
    public function methodA();
}

// Define InterfaceB with methodB
interface InterfaceB {
    public function methodB();
}

// Define ClassA that implements InterfaceA
class ClassA implements InterfaceA {
    public function methodA() {
        echo "Method A from ClassA\n";
    }
}

// Define ClassB that implements InterfaceB
class ClassB implements InterfaceB {
    public function methodB() {
        echo "Method B from ClassB\n";
    }
}

// Define ClassC that implements both InterfaceA and InterfaceB
class ClassC extends ClassA implements InterfaceB {
    // Implement methodB() required by InterfaceB
    public function methodB() {
        echo "Method B from ClassC\n";
    }
}

// Example usage
$classC = new ClassC();
$classC->methodA(); // Calls methodA from ClassA
$classC->methodB(); // Calls methodB from ClassC
?>