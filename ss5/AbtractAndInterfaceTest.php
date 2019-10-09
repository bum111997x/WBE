<?php
include "Chicken.php";
include "Tiger.php";
include "Apple.php";
include "Orange.php";
echo('---- Animals<br>');

$animails[0] = new Tiger();
$animails[1] = new Chicken();
foreach ($animails as $animail) {
    echo $animail->makeSound() . '<br>';
    if ($animail instanceof Chicken) {
        echo $animail->howToEat() . '<br>';
    }
}
echo('---- Fruits<br>');
$fruits[0] = new Apple();
$fruits[1] = new Orange();
foreach ($fruits as $fruit) {
    echo $fruit->howToEat() . '<br>';
}