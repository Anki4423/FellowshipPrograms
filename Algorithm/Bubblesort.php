// PROGRAM OF BUBBLE SORT USING PHP 
<?php 

function bubblesort()
{
    $arr[]=array(23,54,6,10,64,9);
    $n=count($arr);
 for($i=0;$i<$n-1;$i++)
{
    
    for($j=$i+1;$j<$n-1;$j++)
    {
        if($arr[$j]<$arr[$i])
        {
            $temp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$temp;
        }
    }
}
for($i=0;$i<$n-1;$i++)
{
    echo "sorted list  ".$arr[$i];
}

}
bubblesort();
?>