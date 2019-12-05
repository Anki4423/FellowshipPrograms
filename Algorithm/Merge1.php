<?php 
/**
 * @author:Ankita dudhe
 * description: sort the number in assending order using mergesort
 */
$unsorted_numbers = array(3,7,1,26,43,12,6,21,23,73);
/**
 * @method:function merge_array()
 * @param:$left_arr,$right_arr passing as argument
 * @return:sorted numbers of integer type
 */
 function merge_arrays($left_arr, $right_arr)
 {
	$temparray = array();
   while (count($left_arr) > 0 && count($right_arr) > 0)
   {
      if($left_arr[0] > $right_arr[0])
      {
			$temparray[] = $right_arr[0];
			$right_arr = array_slice($right_arr , 1);
      }
      else
      {
			$temparray[] = $left_arr[0];
			$left_arr = array_slice($left_arr, 1);
		}
	}
   while (count($left_arr) > 0)
   {
		$temparray[] = $left_arr[0];
		$left_arr = array_slice($left_arr, 1);
	}
   while (count($right_arr) > 0)
   {
		$temparray[] = $right_arr[0];
		$right_arr = array_slice($right_arr, 1);
	}
	return $temparray;
}
/**
 * @method:mergesort()
 * @param:$array passing as argument
 * @return:left side sorted list also right side sorted list
 */

 function mergesort($array)
    {
    if(count($array) == 1 )
     return $array;
	 $mid = count($array) / 2;
    $left_arr = array_slice($array, 0, $mid);
    $right_arr = array_slice($array, $mid);
    $left_arr = mergesort($left_arr);
	$right_arr = mergesort($right_arr);
	return merge_arrays($left_arr, $right_arr);
    }
    
    $sortedarray=mergesort($unsorted_numbers);
    print_r($sortedarray);
    
    ?>