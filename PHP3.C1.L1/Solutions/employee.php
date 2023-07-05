<?php

class Employee {
private string $name;
private string $department;
private int $salary;

public function __construct($name, $department, $salary) {
$this->name = $name;
$this->department = $department;
$this->salary = $salary;
}

public function getCurrentSalary(): int
{
return $this->salary;
}

public function raiseSalary($percent): void
{
$increaseAmount = $this->salary * ($percent / 100);
$this->salary += $increaseAmount;
}
}
// Create a new employee
$employee = new Employee("John Doe", "Sales", 5000);

// Display current salary
echo "Current Salary: $" . $employee->getCurrentSalary() . PHP_EOL;

// Prompt user for the percentage to raise the salary
$percentage = readline("Enter the percentage to raise the salary: ");

// Raise salary by the user-input percentage
$employee->raiseSalary($percentage);

// Display updated salary
echo "Updated Salary: $" . $employee->getCurrentSalary() . PHP_EOL;