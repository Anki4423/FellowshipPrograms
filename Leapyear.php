<?php 
// LEAP YEAR PROGRAM IN PHP

 /**
  * @Description:find enter year is leap or not
  */
class Leapyear
{
/**
 * @
 */
    function leap()
    {
        echo "Enter the year ";
        fscanf(STDIN,"%d",$year);
        if(($year%4==0)&&($year%100==0)||($year%400==0))
        echo "is leap ";
        
        
        else
        {
            echo "is not leap year";
        }
    }
}
//create object of leapyear class
 $l=new Leapyear();
 $l->leap();

?>