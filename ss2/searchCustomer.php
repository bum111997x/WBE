<?php

$customer_list = array(
    "0" => array("name" => "Uzumaki Naruto", "date_of_birth" => "1997/01/01", "address" => "Konoha", "image" => "image/img1.jpg"),
    "1" => array("name" => "Bum", "date_of_birth" => "1997/10/10", "address" => "Ha Noi", "image" => "image/img1.jpg")
);

function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_customers = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer["date_of_birth"]) < strtotime($from_date))) {
            continue;
        }
        if (!empty($to_date) && (strtotime($customer["date_of_birth"]) > strtotime($to_date))) {
            continue;
        }
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
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
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$from_date = NULL;
$to_date = NULL;
if ($_SERVER["REQUEST_METHOD"] = "POST") {
    $from_date = $_POST['from'];
    $to_date = $_POST['to'];
}

$filtered_customers = searchByDate($customer_list, $from_date, $to_date);
?>

<form method="post">
    From: <input id="from" type="text" name="from" placeholder="yyyy/mm/dd"
                  />
    To: <input id="to" type="text" name="to" placeholder="yyyy/mm/dd"
               />
    <input type="submit" id="submid" value="Loc"/>
</form>

<table border="1">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <td>STT</td>
        <td>Tên</td>
        <td>Ngày sinh</td>
        <td>Địa chỉ</td>
        <td>Ảnh</td>
    </tr>

    <?php foreach ($filtered_customers as $index => $customer): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['date_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div class="profile"><img src="<?php echo $customer['image']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

