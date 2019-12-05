
<?php
/**
 * @author Ankita dudhe
 * Description print twod array
 * @globaltype $var,$var1
 * 
 */
//TWO D ARRAY PROGRAM IN PHP
/**
 * @method function twodarray()
 * @globaltype $row & $col variable for number of row ,column
  */
function twodarray() 
{
    echo "Enter the number of row ";
    fscanf(STDIN,"%d",$row);
    echo "Enter the number of column ";
    fscanf(STDIN,"%d",$col);
    $arr=array();
    for($var=0;$var<$row;$var++)
    {
         for($var1=0;$var1<$col;$var1++)
         {
             fscanf(STDIN," %d",$arr[$var][$var1]);
         }
 
    }
    //for printing 2D arraylist
    for($var=0;$var<$row;$var++)
    {
        for($var1=0;$var1<$col;$var1++)
        {
            echo " ".$arr[$var][$var1];
        }
        echo "\n";
    }
}
twodarray()
?>