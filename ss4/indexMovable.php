<?php

include_once "point.php";
include_once "movablePoint.php";

$movablePoint = new MovablePoint(3, 4, 2, 2);
$movablePoint->toString();
$movablePoint->move();
$movablePoint->toString();
$movablePoint->setSpeed(4, 4);
$movablePoint->move();
$movablePoint->toString();

?>