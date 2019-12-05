<?php
//insertion sort program in php.
function insertion($arr, $len)
{
   for ($i = 1; $i < $len; $i++) {
      $key = $arr[$i];
      $j = $i - 1;
      while ($j >= 0 && $arr[$j] > $key) {
         $arr[$j + 1] = $arr[$j];
         $j--;
      }
      $arr[$j + 1] = $key;
   
   }
   //print sorted array list.
   print "sorted array list: \n";
   for ($i = 0; $i < $len; $i++) {
      echo $arr[$i] . ", ";
   }
       echo "\n";
}
//create array list.
$arr = array(1, 4, 3, 10, 7, 6, 5, 20);
$len = sizeof($arr);
insertion($arr, $len);
?>