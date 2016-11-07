<?php

class Senior extends Student {

  public $name;
  public $age;
  public $grad;
  public $classes;
  public $major;
  public $minor;

  public function __construct($name, $age, $grad, $classes, $major, $minor) {
    $this->name = $name;
    $this->age = $age;
    $this->grad = $grad;
    $this->classes = $classes;
    $this->major = $major;
    $this->minor = $minor;
  }

  public function getMajor() {
    return $this->major;
  }

  public function getMinor() {
    return $this->minor;
  }

  public function __toString() {
    $n = parent::getName();
    $g = parent::getGradYear();

    if($this->minor === null) {
      return $n . " is going to graduate in " . $g . " with a " . $this->getMajor() . " major!";
    }

    else {
      return $n . " is going to graduate in " . $g . " with a " . $this->getMajor() . " major and a " . $this->getMinor() . " minor!";
    }
  }
}

$oneclass = array("CS1520", "CS1632", "MATH0413", "MATH1550");
$twoclass = array("CS1653", "CS1656", "MATH0280", "PHIL0500");
$threeclass = array("MATH0413", "MATH0240", "ENGCMP0200", "PHYS0175", "ECON0110");
$one = new Student("Anna I.", 17, 2019, $threeclass);
$two = new Senior("Jen Z.", 21, 2017, $twoclass, "Computer Science", null);
$three = new Senior("Vivien C.", 20, 2017, $oneclass, "Computer Science", "Mathematics");
$four = clone $one;