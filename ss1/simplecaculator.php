<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Caculator</title>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td><input type="text" name="number1" placeholder="Number 1"></td>
            <td><input type="text" name="number2" placeholder="Number 2"></td>
        </tr>
    </table>
    <input type="submit" value="cong" name="Operation">
    <input type="submit" value="tru" name="Operation">
    <input type="submit" value="nhan" name="Operation">
    <input type="submit" value="chia" name="Operation">
</form>
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    switch ($_POST['Operation']) {
        case "cong":
            $result = $number1 + $number2;
            break;
        case "tru":
            $result = $number1 - $number2;
            break;
        case "nhan":
            $result = $number1 * $number2;
            break;
        case "chia":
            if ($number2 !== 0) {
                $result = $number1 / $number2;
                break;
            } else {
                echo "Loi~!";
            }

    }

    echo "Ket qua la:  $result";
}


?>