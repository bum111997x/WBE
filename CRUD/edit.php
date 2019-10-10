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
<form action="update.php" method="get">
    <?php

    $index = $_GET['id'];

    $currentData = file_get_contents('data.json');
    $arr = json_decode($currentData, true);

    $name = $arr[$index]['name'];
    $phone = $arr[$index]['phone'];
    $address = $arr[$index]['address'];
    $group = $arr[$index]['group'];
    $role = $arr[$index]['role'];

    ?>

    <center>
        <table>
            <tr><h1>Quan ly sinh vien</h1></tr>
            <tr style="display: none">
                <td><input type="text" name="id" value="<?php echo  $index; ?>"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo $address; ?>"></td>
            </tr>
            <tr>
                <td>Group:</td>
                <td><input type="text" name="group" value="<?php echo $group; ?>"></td>
            </tr>
            <tr>
                <td>Role:</td>
                <td><select name="role">
                        <option value="admin">Admin</option>
                        <option value="student">Student</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="update"></td>
            </tr>
        </table>
    </center>
</form>

</body>
</html>



