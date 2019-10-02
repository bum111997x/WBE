<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tu dien</title>
</head>
<body>
<form method="post" action="">
    <h2>Dictionary English-Vietnamese</h2>
    <input type="text" name="inputword">
    <input type="submit" value="search">
</form>
</body>
</html>

<?php

$dictionary = array ("hello" => "xin chao", "how" => "the nao", "book" => "quyen sach", "conputer" => "may tinh");

if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $searchword = $_POST["inputword"];
    $flag = 0;
    foreach ($dictionary as $key => $value){
        if ($key == $searchword){
            echo "$searchword co nghia la $value <br>";
            $flag = 1;
        }
    }

    if ($flag == 0 ){
        echo "Khong tim thay tu can tra! ";
    }
}

?>
