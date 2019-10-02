<?php

if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $investmentAmount = $_POST["investmentAmount"];
    $yearlyInterestRate = $_POST["yearlyInterestRate"];
    $numberOfYears = $_POST["numberOfYears"];
    $futerValue = $investmentAmount + ($investmentAmount * $yearlyInterestRate /100)*$numberOfYears;
    echo "Investment Amount: $investmentAmount";
    echo "<br>";
    echo "Yearly Interest Rate: $yearlyInterestRate%";
    echo "<br>";
    echo "Number of Years: $numberOfYears";
    echo "<br>";
    echo "Future Value: $futerValue";
}

?>