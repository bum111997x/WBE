<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CustomerList</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <tr>
        <th>STT </th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerlist = array(
        "1" => array("ten" => "Uzumaki Naruto",
            "ngaysinh" => "10/10",
            "diachi" => "Konoha"),
        "2" => array("ten" => "Monkey D.Luffy",
            "ngaysinh" => "Unknown",
            "diachi" => "Bang hai tac mu rom")
    );

    foreach ($customerlist as $key => $values){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$values["ten"]."</td>";
        echo "<td>".$values["ngaysinh"]."</td>";
        echo "<td>".$values["diachi"]."</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>