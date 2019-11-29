//PROGRAM FOR SUM OF INTEGER ZERO IN PHP
<?php 
$arr=array(2,-1,3,-3,4,5,7,-5);
$n=sizeof($arr);
function triplet($arr,$n)
{
    for($i=0;$i<$n-2;$i++)
    {
        for($j=$i+1;$i<$n-1;$j++)
        {
            for($k=$j+1;$k<$n;$k++)
            {
                $sum=$arr[$i]+$arr[$j]+$arr[$k];
                if($sum==0)
                {
                    echo "[" . $arr[$i], "+",  $arr[$j], "+", $arr[$k], "=" .$sum ."]";
                   
                }
                echo "\n";

            }
        }
}  


}
triplet($arr,$n)

?>
 