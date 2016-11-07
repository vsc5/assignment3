<?php
include "./PHP/Student.php";
include "./PHP/Senior.php";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assignment 3</title>
  <link rel="stylesheet" href="./CSS/assignment3.css">
</head>
<body>
<h1>Student Records</h1>
<div class="record">
  <p>Initial record:</p>
  <ul>
    <li>Name: <?php echo $one->getName(); ?></li>
    <li>Age: <?php echo $one->getAge(); ?></li>
    <li>Graduation Year: <?php echo $one->getGradYear(); ?></li>
    <li>Classes: <?php echo $one->getClasses(); ?></li>
    <?php
    if($one->getGradYear() <= 2017) {
      ?>
      <li>Major: <?php echo $one->getMajor(); ?> </li>
      <li>Minor: <?php echo $one->getMinor(); ?></li>
      <?php
    }
    ?>
  </ul>
  <p>Changes:</p>
  <ul>
    <li>None</li>
  </ul>
  <p><?php echo $one ?></p>
</div>

<div class="record">
  <p>Initial record:</p>
  <ul>
    <li>Name: <?php echo $two->getName(); ?></li>
    <li>Age: <?php echo $two->getAge(); ?></li>
    <li>Graduation Year: <?php echo $two->getGradYear(); ?></li>
    <li>Classes: <?php echo $two->getClasses(); ?></li>
    <?php
    if($two->getGradYear() <= 2017) {
      ?>
      <li>Major: <?php echo $two->getMajor(); ?> </li>
      <li>Minor: <?php echo $two->getMinor(); ?></li>
      <?php
    }
    ?>
  </ul>
  <p>Changes:</p>
  <ul>
    <li>None</li>
  </ul>
  <p><?php echo $two ?></p>
</div>

<div class="record">
  <p>Initial record:</p>
  <ul>
    <li>Name: <?php echo $three->getName(); ?></li>
    <li>Age: <?php echo $three->getAge(); ?></li>
    <li>Graduation Year: <?php echo $three->getGradYear(); ?></li>
    <li>Classes: <?php echo $three->getClasses(); ?></li>
    <?php
    if($three->getGradYear() <= 2017) {
      ?>
      <li>Major: <?php echo $three->getMajor(); ?> </li>
      <li>Minor: <?php echo $three->getMinor(); ?></li>
      <?php
    }
    ?>
  </ul>
  <p>Changes:</p>
  <ul>
    <li>None</li>
  </ul>
  <p><?php echo $three ?></p>
</div>

<div class="record">
  <p>Initial record:</p>
  <ul>
    <li>Name: <?php echo $four->getName(); ?></li>
    <li>Age: <?php echo $four->getAge(); ?></li>
    <li>Graduation Year: <?php echo $four->getGradYear(); ?></li>
    <li>Classes: <?php echo $four->getClasses(); ?></li>
    <?php
    if($four->getGradYear() <= 2017) {
      ?>
      <li>Major: <?php echo $four->getMajor(); ?> </li>
      <li>Minor: <?php echo $four->getMinor(); ?></li>
      <?php
    }
    ?>
  </ul>
  <p>Changes:</p>
  <ul>
    <li>
      Changed name from
      <?php echo $four->getName(); ?>
      <?php $four->setName("Lara V."); ?>
      to
      <?php echo $four->getName(); ?>
    </li>
    <li>
      Changed age from
      <?php echo $four->getAge(); ?>
      <?php $four->setAge("18"); ?>
      to
      <?php echo $four->getAge(); ?>
    </li>
    <li>
      Changed graduation year from
      <?php echo $four->getGradYear(); ?>
      <?php $four->setGrad(2018); ?>
      to
      <?php echo $four->getGradYear(); ?>
    </li>
    <li>
      <?php echo $four->dropClass("MATH0413"); ?>
    </li>
    <li>
      <?php echo $four->addClass("CS0401"); ?>
    </li>
  </ul>
  <p>Current record:</p>
  <ul>
    <li>Name: <?php echo $four->getName(); ?></li>
    <li>Age: <?php echo $four->getAge(); ?></li>
    <li>Graduation Year: <?php echo $four->getGradYear(); ?></li>
    <li>Classes: <?php echo $four->getClasses(); ?></li>
    <?php
    if($four->getGradYear() <= 2017) {
      ?>
      <li>Major: <?php echo $four->getMajor(); ?> </li>
      <li>Minor: <?php echo $four->getMinor(); ?></li>
      <?php
    }
    ?>
  </ul>
  <p><?php echo $four ?></p>
</div>
</body>
</html>