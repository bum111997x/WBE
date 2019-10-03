

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="get">
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="text" name="c">
    <input type="submit" value="caculate">
</form>
</body>
</html>

<?php
include "quadratic.php";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

    $quadratic = new QuadraticEquation($a, $b, $c);
    if ($quadratic->getDiscriminant() >= 0) {
        echo "Nghiem thu nhat la: " . $quadratic->getRoot1();
        echo "<br>";
        echo "Nghiem thu hai la: " . $quadratic->getRoot2();
    } else {
        echo "The equation has no roots";
    }
}
?>