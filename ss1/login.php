<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin"){
        echo "Welcome $username";
    }else{
        echo "Try again! ";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" >
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form method="POST" action="">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
<!--    <button type="submit">login</button>-->
</form>
</body>
</html>
