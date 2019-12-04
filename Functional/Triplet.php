
<?php 
/**
 * @author: Ankita dudhe
 * summary :find sum of tree interger is zero
 * @globaltype:$arr var is for array initialize
 */
//PROGRAM FOR SUM OF INTEGER ZERO IN PHP
$arr=array(2,-1,3,-3,4,5,7,-5);
$len=sizeof($arr);
/**
 *  @method function triplet()
 * @param $arr for array & $len pass for size of array
 */
function triplet($arr,$len)
{
    for($firstno=0;$firstno<$len-2;$firstno++)
    {
        for($secno=$firstno+1;$secno<$len-1;$secno++)
        {
            for($thirdno=$secno+1;$thirdno<$len;$thirdno++)
            {
                $sum=$arr[$firstno]+$arr[$secno]+$arr[$thirdno];
                //condition check
                if($sum==0)
                {
                    echo "[" . $arr[$firstno], "+",  $arr[$secno], "+", $arr[$thirdno], "=" .$sum ."]";
                   
                }
                echo "\n";

            }
        }
}  


}
triplet($arr,$n)

?>
 