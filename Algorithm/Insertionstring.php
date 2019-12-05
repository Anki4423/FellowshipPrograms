<?php
/**
 * description:sort string array using insertion sort
 * @method:function sortstring()
 * @param:$arr and $len pass as a argument
 */
//insertion sort for string array program.
function sortstring($arr, $len)
{
   for ($i= 1; $i < $len; $i++) {
      $key = $arr[$i];
      $j = $i - 1;
      while ($j >= 0 && $arr[$j] > $key) {
         $arr[$j + 1] = $arr[$j];
         $j = $j - 1;
      }
      $arr[$j + 1] = $key;
   }
   //print sorted array list.
   for ($i = 0; $i < $len; $i++) {
      echo $arr[$i] . " ";
      echo "\n";
   }
}
//create string array here
$arr = array('vina','ankita','nidhi','shiv');
$len = sizeof($arr);
//function call
sortstring($arr, $len);
?>