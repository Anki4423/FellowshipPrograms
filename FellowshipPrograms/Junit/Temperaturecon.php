//PROGRAM FOR TEMPERATURE CONVERSION
<?php 
function tempconversion()
{
echo "Enter the temperature in celsius: ";
fscanf(STDIN,"%d",$cel);
echo "Enter the temperature in fehrenheit: ";
fscanf(STDIN,"%d",$feh);
$f=($cel*9/5)+32;
$c=($feh-32)*5/9;
echo "Temperature in fehrenheit ".$f ."\n";
echo "Temperature in celsius ".$c;
}
tempconversion();
?>