<?php

class Average {
public function calculateAverage($num1, $num2, $num3): void
{
if ($this->isValidNumber($num1) && $this->isValidNumber($num2) && $this->isValidNumber($num3)) {
$average = ($num1 + $num2 + $num3) / 3;
echo "The average is: " . $average . "\n";
} else {
echo "Invalid input. Please enter numeric values.\n";
}
}

private function isValidNumber($num): bool
{
return is_numeric($num);
}
}

// Create an instance of the Average class
$avg = new Average();

// Read input from the user
$num1 = readline("Enter the first number: ");
$num2 = readline("Enter the second number: ");
$num3 = readline("Enter the third number: ");

// Call the calculateAverage method to calculate and print the result
$avg->calculateAverage($num1, $num2, $num3);
