<?php

$index = $_GET["id"];
$studentInfor = ['name' => $_GET['name'],
    'phone' => $_GET['phone'],
    'address' => $_GET['address'], 'group' => $_GET['group'],
    'role'=>$_GET['role']];

$currentData = file_get_contents('data.json');
$arr = json_decode($currentData, true);

$arr[$index] = $studentInfor;

$newData = json_encode($arr);
file_put_contents('data.json', $newData);
header('Location: index.php');
?>