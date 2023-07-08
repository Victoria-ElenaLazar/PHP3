<?php

class Person {
protected string $name;
protected string $address;

public function __construct($name, $address) {
$this->name = $name;
$this->address = $address;
}

public function getName(): string
{
return $this->name;
}

public function getAddress(): string
{
return $this->address;
}

public function setAddress($address): void
{
$this->address = $address;
}

public function __toString() {
return "Person[name={$this->name}, address={$this->address}]";
}
}

class Student extends Person {
private string $program;
private int $year;
private float $fee;

public function __construct($name, $address, $program, $year, $fee) {
parent::__construct($name, $address);
$this->program = $program;
$this->year = $year;
$this->fee = $fee;
}

public function getProgram(): string
{
return $this->program;
}

public function setProgram($program): void
{
$this->program = $program;
}

public function getYear(): int
{
return $this->year;
}

public function setYear($year): void
{
$this->year = $year;
}

public function getFee(): float
{
return $this->fee;
}

public function setFee($fee): void
{
$this->fee = $fee;
}

public function __toString() {
return "Student[Person[name={$this->getName()}, address={$this->getAddress()}], program={$this->program}, year={$this->year}, fee={$this->fee}]";
}
}

class Staff extends Person {
private string $school;
private float $pay;

public function __construct($name, $address, $school, $pay) {
parent::__construct($name, $address);
$this->school = $school;
$this->pay = $pay;
}

public function getSchool(): string
{
return $this->school;
}

public function setSchool($school): void
{
$this->school = $school;
}

public function getPay(): float
{
return $this->pay;
}

public function setPay($pay): void
{
$this->pay = $pay;
}

public function __toString() {
return "Staff[Person[name={$this->getName()}, address={$this->getAddress()}], school={$this->school}, pay={$this->pay}]";
}
}


$person = new Person("Marinela", "Bucharest Street 29");
echo $person . PHP_EOL;

$student = new Student("Mary Jane", "Bucharest Street 56", "Computer Science", 2023, 5000.00);
echo $student . PHP_EOL;

$staff = new Staff("Vlad", "Cosmopolitan", "ABC School", 2500.00);
echo $staff . PHP_EOL;


function concat($str1, $str2, $delimiter): string
{
return $str1 . $delimiter . $str2;
}

$message = concat('Hi', 'there!', ' ');

echo $message;
