<?php

function calc($x, $y)
{
    $tong = $x + $y;
    $hieu = $x - $y;
    $nhan = $x * $y;
    $chia = $x / $y;

    echo "$x + $y = $tong";

    echo "<br>";
    echo "$x - $y = $hieu";
    echo "<br>";
    echo "$x * $y = $nhan";
    echo "<br>";
    echo "$x / $y = $chia";
    echo "<br>";
    if ($y == 0) {
        throw new Exception(" Xảy ra ngoại lệ ");
    }
//    return true;
}

try {
    echo calc(0, 0) . "\n";
} catch (Exception $e) {
    echo 'Mess: ' . $e->getMessage(), "\n";
}

?>
