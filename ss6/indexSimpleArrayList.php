<?php

include_once "ArrayList.php";

$listInteger = new ArrayList();

$listInteger->add(1);
$listInteger->add(4);
$listInteger->add(5);
$listInteger->add(9);

print_r($listInteger->arrayList);
echo "<br>";
echo $listInteger->get(2)."<br>";
$listInteger->remove(2);
echo "<br>";
print_r($listInteger->arrayList)

?>