<?php 
/**
 * 
 */
//BINARY SEARCH OF STRING IN PHP
class B 
{
$str =array('abhi','chetan','nisha','priya','sachin');
echo"Enter the element of string";
fscanf(STDIN,"%s",$str);
$n=strlen($str);
$low=0;
$high=$n-1;
$mid=($low+$high)/2;
function search()
{
while($low<$high)
{
    if($str[$mid]==$find)
    {
        echo"element found at ".$n."position";
    }
  else if($mid<$find)
    {
   $high=$mid-1;
    }
    else
    {
    $low=$mid+1;
    }
}
}
function find()
{
    echo"Enter element you want to search";
    fscanf(STDIN,"%s",$find);
}

}
$b1=new B();
$b1->find();
$b1->search();
?>