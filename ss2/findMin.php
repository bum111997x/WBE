<?php

class Min
{
    function findMin($array){
        $min = $array[0];
        $length = count($array);
        for ($i =1; $i<$length;$i++){
            if ($min > $array[$i]){
                $min = $array[$i];
            }
        }
        echo "Gia tri nho nhat cua mang la: $min";
    }
}

$myArr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
$findMin = new Min();
$findMin->findMin($myArr);
?>


