// VENDING MACHINE PROGRAM IN PHP
<?php 
$value;
$total=0;
echo "Enter amount ";
fscanf(STDIN,"%d" ,$value);
function vending($value)
{
    $arr=array(2000,1000,500,100,50,10,5,1);
    $n=sizeof($arr);
    for($i=0;$i<$n;$i++)
    {
    if($value/$arr[$i]!=0)
      {
  $total=$total+($value/$arr[$i]);
  $res=($value/$arr[$i]);
    echo $arr[$i]."rs notes ".$res;
  $value=$value%$arr[$i];
}
$i++;
if($value==0)
{
    echo "total notes".$total;
}
    }

}
vending($value)
?>