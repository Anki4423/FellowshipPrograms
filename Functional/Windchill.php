
<?php 
/**
 * @author Ankita Dudhe 
 * @globaltype $wchill
 */
//PROGRAM OF WINDCHILL IN PHP 
/**
 * @method function windchill()
 * @param  passing $temp as argument
 * @param  passing $wind as argumant
 */
function windchill($temp,$wind)
{
    $temp;
    $wind;
    echo "Enter the temperature";
    fscanf(STDIN,"%d",$temp);
    echo " Enter the wind speed";
    fscanf(STDIN,"%d",$wind);
    $wchill=35.74+0.6315*$t+(0.4275*$t-35.75*pow($w, 0.16));
    echo "windchill is" .$wchill;
}
windchill($temp,$wind);
?>