<?php

class Account {
private int $id;
private string $name;
private float $balance;

public function __construct($id, $name, $balance) {
$this->id = $id;
$this->name = $name;
$this->balance = $balance;
}

public function getBalance(): float
{
return $this->balance;
}

public function credit($amount): void
{
$this->balance += $amount;
}

public function debit($amount): void
{
if ($amount <= $this->balance) {
$this->balance -= $amount;
} else {
echo "Insufficient funds to debit." . PHP_EOL;
}
}

public function transferTo($anotherAccount, $amount): void
{
if ($amount <= $this->balance) {
$this->balance -= $amount;
$anotherAccount->credit($amount);
echo "$amount transferred from Account $this->id to Account $anotherAccount->id." . PHP_EOL;
} else {
echo "Insufficient funds to transfer." . PHP_EOL;
}
}
}

// Create two accounts
$account1 = new Account(1, "John Doe", 5000);
$account2 = new Account(2, "Jane Smith", 3000);

// Display current balances
echo "Account 1 balance: $" . $account1->getBalance() . PHP_EOL;
echo "Account 2 balance: $" . $account2->getBalance() . PHP_EOL;

// Prompt user for amount to credit Account 1
$creditAmount = readline("Enter the amount to credit Account 1: ");
$account1->credit($creditAmount);
echo "Account 1 credited with $" . $creditAmount . PHP_EOL;

// Prompt user for amount to debit Account 2
$debitAmount = readline("Enter the amount to debit Account 2: ");
$account2->debit($debitAmount);
echo "Account 2 debited with $" . $debitAmount . PHP_EOL;

// Prompt user for amount to transfer from Account 1 to Account 2
$transferAmount = readline("Enter the amount to transfer from Account 1 to Account 2: ");
$account1->transferTo($account2, $transferAmount);

// Display updated balances
echo "Account 1 balance: $" . $account1->getBalance() . PHP_EOL;
echo "Account 2 balance: $" . $account2->getBalance() . PHP_EOL;