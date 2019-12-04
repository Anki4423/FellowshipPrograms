//PROGRAM FOR DAY OF WEEK IN PHP

<?php
function dayofWeek()
{
    echo "Enter the date  ";
    fscanf(STDIN,"%d",$date);
    echo "Enter the month ";
    fscanf(STDIN,"%d",$month);
    echo " Enter the year ";
    fscanf(STDIN,"%d",$year);
    
	$y1 = $year - (14 - $month) / 12;
	$x = $y1 + ($y1 / 4) - ($y1 / 100) + ($y1 / 400);
	$m1 = $month + 12 * ((14 - $month) / 12) - 2;
	$d1 = ($date + $x + (31 * $m1) / 12) % 7;
	//switch case
    switch($d1)
	{
		case 0:
			echo "sunday";
			break;
		case 1:
			echo "monday";
			break;
		case 2:
			
			echo "tuesday";
			break;
		case 3:
			
			echo "wednesday";
			break;
		case 4:
			
			echo "thursday";
			break;
		case 5:
			
			echo "friday";
			break;
		case 6:
		
			echo "saturday";
		    break;
		default:
			echo "invalid";
		    break;
				
			}
			
}
dayofWeek();
?>