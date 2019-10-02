<?php

function calc($x, $y)
{
    $tong = $x + $y;
    $hieu = $x - $y;
    $nhan = $x * $y;

    echo "$x + $y = $tong";
    echo "<br>";
    echo "$x - $y = $hieu";
    echo "<br>";
    echo "$x * $y = $nhan";
    echo "<br>";

    try {
        condition($x, $y);
    } catch (Exception $e) {
        echo 'Mess: ' . $e->getMessage(), "\n";
    }
}

calc(9,1);
function condition($x, $y)
{
    if ($y == 0) {
        throw new Exception(" Xảy ra ngoại lệ ");
    } else {
        echo "$x / $y = " . $x / $y;
    }
}

?>
