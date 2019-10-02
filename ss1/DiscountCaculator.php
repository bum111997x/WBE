<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form method="post" action="Caculator.php">
    <table>
        <tr>
            <td>Product Description: </td>
            <td><input type="text" name="ProductDescription"></td>
        </tr>
        <tr>
            <td>List Price:</td>
            <td><input type="text" name="ListPrice"></td>
        </tr>
        <tr>
            <td>Discount Percent:</td>
            <td><input type="text" name="DiscountPercent"></td>
        </tr>
        <tr>
            <td><input type="submit" value="calculate"></td>
        </tr>
    </table>
</form>
</body>
</html>


