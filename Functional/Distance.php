// PROGRAM TO FIND DISTANCE FROM THE POINT
<?php 
function distance()
{
    echo "Enter the value of x=";
    fscanf(STDIN, "%d", $x);
    echo "Enter the value of y=";
    fscanf(STDIN,"%d", $y);
    $distance=sqrt($x*$x+$y*$y);
    echo "distance from the point(x,y)=" .$distance;
}
distance();
?>