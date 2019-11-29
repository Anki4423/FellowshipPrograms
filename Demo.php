<?php
//find the three integer sum program in php.
function findTriplets($arr, $n)
{
    $found = true;
    for ($i = 0; $i < $n - 2; $i++) {
        for ($j = $i + 1; $j < $n - 1; $j++) {
            for ($k = $j + 1; $k < $n; $k++) {
                if ($arr[$i] + $arr[$j] + $arr[$k] == 0) {
                    echo "[" . $arr[$i], "+",  $arr[$j], "+", $arr[$k], "\n" . "]";
                    $found = true;
                }
            }
        }
    }
    if ($found == false)
        echo " not exist ", "\n";
}
$arr = array(0, -1, 2, -3, 1, 12, 6, 0, 8, 6);
$n = sizeof($arr);
findTriplets($arr, $n);
?>