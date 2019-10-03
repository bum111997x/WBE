<?php
include "classRectangle.php";
?>

<?php

$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->width;
echo "<br>";
echo $rectangle->height;
echo "<br>";

$rectangle->height = 30;
$rectangle->width = 20;

echo $rectangle->height;
echo "<br>";
echo $rectangle->width;
echo "<br>";
echo $rectangle->getArea();
echo "<br>";
echo $rectangle->getPerimeter();
echo "<br>";
echo $rectangle->display();

?>