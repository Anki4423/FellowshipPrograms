// PROGRAM TO CALCULATE SQUAREROOT
<?php 
function squareroot()
{
echo "Enter the number: ";
fscanf(STDIN,"%d",$num);
$epsilon = 1e-15; 
		 
 // estimate of the square root of c
	$t = $num; 
		 
 // repeatedly apply Newton update step until desired precision is achieved
    while (abs($t - $num/ $t) > $epsilon * $t) 
    {
	$t = ($num / $t + $t) / 2.0;
    }
    echo "squareroot of number=" .$t;
		 
}
squareroot();
?>