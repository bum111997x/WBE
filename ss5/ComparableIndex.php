<?php

include "ComparableCircle.php";
$circleOne = new ComparableCircle("8","circleOne");
$circleTwo = new ComparableCircle("2","circleTwo");
$circleThree = new ComparableCircle("4","circleThree");
$test = $circleOne->compareTo($circleTwo);
echo ("Comparable: <br>");
echo $test;