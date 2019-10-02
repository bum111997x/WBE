<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['nameUser'];
    $email = $_POST['email'];
    $phone = $_POST['phoneNumber'];
    $has_error = false;

    if (empty($name)){
        $nameErr = "Tên đăng nhập không được để trống!";
        $has_error = true;
    }

    if (empty($email)){
        $emailErr = "Email không được để trống!";
        $has_error = true;
    }else {
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emaiErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
            $has_error = true;
        }
    }

    if (empty(($phone))){
        $phoneErr = "Số điện thoại không được để trống!";
        $has_error = true;
    }

    if ($has_error = false){
        echo "Thanh cong!";
    }
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
    <table>
        <tr>
            <td>Tên người dùng: </td>
            <td><input type="text" name="nameUser" value="<?php echo $name; ?>"></td>
            <td><span class="error">* <?php echo $nameErr; ?></span></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="text" name="email" value="<?php echo $email; ?>"</td>
            <td><span class="error">* <?php echo $emailErr; ?></span></td>
        </tr>
        <tr>
            <td>Điện thoại: </td>
            <td><input type="text" name="phoneNumber" value="<?php echo $phone; ?>"</td>
            <td><span class="error">*<?php echo $phoneErr; ?></span></td>
        </tr>
    </table>
    <input type="submit" value="submit">
</form>
</body>
</html>
