<?php
class BankAccount {
    // Properties
    private $accountNumber;
    private $balance;

    // Constructor to initialize properties
    public function __construct($accountNumber, $initialBalance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    // Method to deposit money
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $" . $amount . "\n";
        } else {
            echo "Deposit amount must be positive.\n";
        }
    }

    // Method to withdraw money
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrew: $" . $amount . "\n";
        } elseif ($amount > $this->balance) {
            echo "Insufficient balance.\n";
        } else {
            echo "Withdrawal amount must be positive.\n";
        }
    }

    // Method to display current balance
    public function getBalance() {
        return $this->balance;
    }
}

// Example usage
$account = new BankAccount("123456789", 1000);
$account->deposit(500);                 // Output: Deposited: $500
$account->withdraw(300);                // Output: Withdrew: $300
echo "Current Balance: $" . $account->getBalance() . "\n"; // Output: Current Balance: $1200
$account->withdraw(1500);               // Output: Insufficient balance.
?>