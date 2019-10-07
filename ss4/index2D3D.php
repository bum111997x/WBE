<?php

include_once("point2D.php");
include_once ("point3D.php");

$point_2D = new Point2D(5,1);
$point_2D->toString();
echo "<br>";
$point_2D->setXY(1,5);
$point_2D->toString();
echo "<br>";

$point_3D = new Point3D(1,2,3);
$point_3D->toString();
echo "<br>";
$point_3D->setXYZ(4,5,6);
$point_3D->toString();

?>