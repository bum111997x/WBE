<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value Calculator</title>
</head>
<body>
<form method="post" action="futureValueCaculator.php">
    <table>
        <tr>
            <td>Investment Amount:  </td>
            <td><input type="text" name="investmentAmount"></td>
        </tr>
        <tr>
            <td>Yearly Interest Rate: </td>
            <td><input type="text" name="yearlyInterestRate"></td>
        </tr>
        <tr>
            <td>Number of Years: </td>
            <td><input type="text" name="numberOfYears"></td>
        </tr>
    </table>
    <input type="submit" value="calculate">
</form>
</body>
</html>
