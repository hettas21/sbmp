<?php
// Abstract class Employee
abstract class Employee {
    protected $name;
    protected $salary;

    // Constructor to initialize name and base salary
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Abstract method to calculate pay
    abstract public function calculatePay();
}

// HourlyEmployee class that extends Employee
class HourlyEmployee extends Employee {
    private $hoursWorked;

    public function __construct($name, $hourlyRate, $hoursWorked) {
        parent::__construct($name, $hourlyRate); // Initialize name and hourly rate as salary
        $this->hoursWorked = $hoursWorked;
    }

    // Implement calculatePay() for hourly employees
    public function calculatePay() {
        return $this->salary * $this->hoursWorked; // salary represents hourly rate in this case
    }
}

// SalariedEmployee class that extends Employee
class SalariedEmployee extends Employee {
    public function __construct($name, $annualSalary) {
        parent::__construct($name, $annualSalary); // Initialize name and annual salary
    }

    // Implement calculatePay() for salaried employees
    public function calculatePay() {
        return $this->salary / 12; // Monthly pay by dividing annual salary by 12
    }
}

// Demonstrating polymorphism
$hourlyEmployee = new HourlyEmployee("Alice", 20, 160); // $20/hour, 160 hours worked
$salariedEmployee = new SalariedEmployee("Bob", 60000); // $60,000 annual salary

echo $hourlyEmployee->calculatePay() . "\n"; // Output: 3200 (20 * 160)
echo $salariedEmployee->calculatePay() . "\n"; // Output: 5000 (60000 / 12)
?>