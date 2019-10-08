<?php
include_once "birthday.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $date = $_POST["date"];

    $birthday = new Birthday($date);
    echo "So tuoi hien nay cua ban la: ".$birthday->calculateAge();
}
?>

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
<form method="post">
    <input type="text" placeholder="YYYY-MM-DD" name="date">
    <input type="submit" value="submit">
</form>
</body>
</html>
