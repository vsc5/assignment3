<?php

	class Student {

   public $name;
   public $age;
   public $grad;
   public $classes;

   public function __construct($n, $a, $g, $c) {
     $this->name = $n;
     $this->age = $a;
     $this->grad = $g;
     $this->classes = $c;
   }

   public function getName() {
     return $this->name;
   }

   public function setName($newName) {
     $this->name = $newName;
   }

   public function getAge() {
     return $this->age;
   }

   public function setAge($newAge) {
     $this->age = $newAge;
   }

   public function getGradYear() {
     return $this->grad;
   }

   public function setGrad($newGrad) {
     $this->grad = $newGrad;
   }

   public function getClasses() {
     $class = "";
     $counter = 1;
     foreach ($this->classes as &$value) {
       if($counter == 1) {
         $class = $value;
       }
       else {
         $class = $class . ", " . $value;
       }
       $counter++;
     }
     return $class;
   }

   public function dropClass($class) {
     for ($x = 0; $x <= count($this->classes); $x++) {
       if ($this->classes[$x] === $class) {
         unset($this->classes[$x]);
       }
     }
     return "Dropped " . $class;
   }

   public function addClass($class) {
     $this->classes[] = $class;
     return "Added " . $class;
   }

   public function __toString()
   {
     if ($this->getGradYear() <= 2017) {
       return $this->getName() . " will be able to graduate soon!";
     } else {
       return $this->getName() . " won't be able to graduate soon... :(";
     }
   }
	}