<?php

include_once "circle_1.php";
include_once "cylinder_1.php";

$circle = new Circle_(3,"red");
$circle->toString();
echo "Dien tich hinh tron la: ".$circle->calculateArea();

$cylinder = new Cylinder_(3,"red",5);
echo "<br>";
$cylinder->toString();
echo "<br>";
echo "Dien tich hinh tru la: ".$cylinder->calculateArea();
echo "<br>";
echo "The tich hinh tru la: ".$cylinder->calculateVolum();

?>