<?php 
function binarySrch($arr, $find)
{
   $li = 0;
   $hi = sizeof($arr)-1;
   $mi = ($li + $hi) / 2;
   while ($li <= $hi) {
      
      if ($arr[$mi] == $find) {
         echo "element found in " . $mi . " index position" . "\n";
         break;
      } else if ($arr[$mi] < $find) {
         $li = $mi + 1;
      } else {
         $hi = $mi - 1;
      }
      $mi = ($li + $hi) / 2;
   }
   //if word not found in array list then execute this block.
   if ($li > $hi) {
      echo "element not found in array list \n";
   }
}
//create array here.
$arr = array('ajay','babul','dipak','gopal','pandit');
$find = 'dipak';
binarySrch($arr, $find);
?>