<?php

function loadData($path)
{
    $dataFile = file_get_contents($path);
    return json_decode($dataFile, true);
}

$arrPrint = loadData('data.json');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css">
</head>
<body>
<form method="post">
    <table id="customers">
        <tr>
            <td style="text-align: center" colspan="6"><h2>Danh sach sinh vien</h2></td>
        </tr>
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Role</td>
            <td>Group</td>
        </tr>
        <?php
        for ($i = 0; $i < count($arrPrint); $i++) {
            ?>
            <tr>
                <td><?php echo $i + 1 ?></td>
                <td><?php echo $arrPrint[$i]["name"] ?></td>
                <td><?php echo $arrPrint[$i]["phone"] ?></td>
                <td><?php echo $arrPrint[$i]["address"] ?></td>
                <td><?php echo $arrPrint[$i]["role"] ?></td>
                <td><?php echo $arrPrint[$i]["group"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</form>
</body>
</html>
