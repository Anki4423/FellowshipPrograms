//TWO D ARRAY PROGRAM IN PHP
<?php
function twodarray() 
{
    echo "Enter the number of row ";
    fscanf(STDIN,"%d",$row);
    echo "Enter the number of column ";
    fscanf(STDIN,"%d",$col);
    $arr=array();
    for($i=0;$i<$row;$i++)
    {
         for($j=0;$j<$col;$j++)
         {
             fscanf(STDIN," %d",$arr[$i][$j]);
         }
 
    }
    //for printing 2D arraylist
    for($i=0;$i<$row;$i++)
    {
        for($j=0;$j<$col;$j++)
        {
            echo " ".$arr[$i][$j];
        }
        echo "\n";
    }
}
twodarray()
?>