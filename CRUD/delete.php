<?php
include_once "user.php";
include_once "student.php";
include_once "studentManager.php";

$index = $_GET['id'];
$studentManager = new StudentManager('data.json');
$studentManager->deleteStudent($index);

header('Location: index.php');