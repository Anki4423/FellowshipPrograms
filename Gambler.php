
// GAMBLER PROGRAM IN PHP
<?php
function gambler()
{
    $stake;
    $goal;
    $bet=0;
    $trial;
    $win=0;
    $cash;
   
    echo "Enter the stake ";
    fscanf(STDIN,"%d",$stake);
    echo " how many time you want to trial ";
    fscanf(STDIN," %d",$trial);
    echo " enter your goal ";
    fscanf(STDIN,"%d",$goal);
    for($i=0;$i<$trial;$i++)
    {
        $cash=$stake;
    while($cash>0 && $cash<$goal)
    {
        $bet++;
   
        if(rand(0,1)>0.5)
        {
            $cash++;
        }
        else{
        $cash--;
    }
}
if($cash==$goal)
{
    $win++;
}
    }
 echo $win. " wins in trial  " .$trial ." \n";
 echo "percentage of game win " .(100*$win/$trial) ."\n";
 echo "average of bet"  .(1*$bet/$trial);
}

gambler()
?>