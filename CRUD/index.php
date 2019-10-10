<?php
include_once "user.php";
include_once "student.php";
include_once "studentManager.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $group = $_POST['group'];
    $role = $_POST['role'];

    $student = new Student($name, $phone, $address, $role, $group);
    $studentManager = new StudentManager('data.json');
    $studentManager->add($student);


}

$studentList = new StudentManager('data.json');
$list = $studentList->getListStudent();

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table#customers {
            border-collapse: collapse;
            width: 100%;
            border: 2px;
            color: #CD214F;
            border-color: #212738;
        }
        #customers td{
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #212738;
            font-size: 20px;
        }
    </style>
</head>
<body background="image/luffy1.jpg" style="background-size: cover">
<form action="" method="post">
    <center>
        <table>
            <tr><h1>Quan ly sinh vien</h1></tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" style="border-radius: 10px"></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone" style="border-radius: 10px"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" style="border-radius: 10px"></td>
            </tr>
            <tr>
                <td>Group:</td>
                <td><input type="text" name="group" style="border-radius: 10px"></td>
            </tr>
            <tr>
                <td>Role:</td>
                <td><select name="role">
                        <option value="admin">Admin</option>
                        <option value="student">Student</option>
                    </select></td>
            </tr>
            <tr>
                <td colspan="2"><input class="btn " type="submit" value="submit"></td>
            </tr>
        </table>
    </center>
</form>
<br>
<table id="customers" border="1px">
    <tr>
        <td style="text-align: center" colspan="8"><h2>Danh sach sinh vien</h2></td>
    </tr>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Address</td>
        <td>Role</td>
        <td>Group</td>
        <td></td>
        <td></td>
    </tr>
    <?php
    foreach ($list as $key => $item) {
        ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $item->name ?></td>
            <td><?php echo $item->phone ?></td>
            <td><?php echo $item->address ?></td>
            <td><?php echo $item->role ?></td>
            <td><?php echo $item->group ?></td>
            <td><a href="delete.php?id=<?php echo $key ?>" onclick="return confirm('Are you sure??????')">Delete</a>
            </td>
            <td><a href="edit.php?id=<?php echo $key ?>" onclick="return confirm('Are you sure??????')">Edit</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>

