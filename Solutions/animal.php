<?php

class Animal {
protected string $name;

public function __construct($name) {
$this->name = $name;
}

public function __toString(): string {
return "Animal[name={$this->name}]";
}
}

class Mammal extends Animal {
public function __construct($name) {
parent::__construct($name);
}

public function __toString(): string {
return "Mammal[" . parent::__toString() . "]";
}
}

class Cat extends Mammal {
public string $greet;

public function __construct($name, $greet) {
parent::__construct($name);
$this->greet = $greet;
echo "Meow ";
}

public function __toString(): string {
return "Cat[" . parent::__toString() . "]";
}
}

class Dog extends Mammal {
public string $greet;

public function __construct($name, $greet) {
parent::__construct($name);
$this->greet = $greet;
echo "Woof ";
}

public function __toString(): string {
return "Dog[" . parent::__toString() . "]";
}
}

function concat($str1, $str2, $delimiter): string
{
return $str1 . $delimiter . $str2;
}

$animal = new Animal("Stitch");
echo $animal . PHP_EOL;

$mammal = new Mammal("Carlos");
echo $mammal . PHP_EOL;

$cat = new Cat("Daisy", "Meow");
echo $cat . PHP_EOL;

$dog = new Dog("Snoop", "Woof");
echo $dog . PHP_EOL;

$message = concat('Hi', 'there!', ' ');
echo $message;
