// PROGRAM OF WINDCHILL IN PHP 
<?php 
function windchill($t,$w)
{
    $t;
    $w;
    echo "Enter the temperature";
    fscanf(STDIN,"%d",$t);
    echo " Enter the wind speed";
    fscanf(STDIN,"%d",$w)
    $wchill=35.74+0.6315*$t+(0.4275*$t-35.75*pow($w, 0.16));
    echo "windchill is" .$wchill;
}