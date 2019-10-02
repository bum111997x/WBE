<?php

class Max{
    function findMax($arr){
        $max = $arr[0][0];
        for ($i = 0 ; $i < count($arr);$i++){
            for ($j = 0; $j <count($arr[$i]);$j++){
                if ($max < $arr[$i][$j]){
                    $max = $arr[$i][$j];
                    $x = $i;
                    $y = $j;
                }
            }
        }
        echo "so lon nhat trong mang la: $max co toa do x= $x va y= $y";
    }
}

$myArr = array(array(1,2,3),array(4,5,6),array(7,8,9));
$findMax = new Max();
$findMax->findMax($myArr);
?>