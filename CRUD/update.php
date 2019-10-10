<?php

include_once "user.php";
include_once "student.php";
include_once "studentManager.php";
$index = $_GET["id"];
$manger = new StudentManager("data.json");

$arr1=new Student($_GET['name'],$_GET['phone'],$_GET['address'],$_GET['group'],$_GET['role']);
$arr=$manger->edit($index,$arr1);

$newData = json_encode($arr);
file_put_contents('data.json', $newData);

header('Location: index.php');
?>