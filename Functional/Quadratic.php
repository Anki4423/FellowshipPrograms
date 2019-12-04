
<?php
/**
 * @author:Ankita dudhe
 * summary:calculate roots of quadratic equation
 * @globlaltype :$a,$b,$c,$delta
 * @method:quadratic()
 */
function quadratic()
{
    echo "a=";
    $a=(float) fgets(STDIN);
   
    echo "b=";
    $b=(float) fgets(STDIN);
    echo "c=";
    $c=(float) fgets(STDIN);
    $delta=$b*$b-4*$a*$c;
    if($delta>0)
    {
    echo "Root 1 of x=" .(-$b + sqrt($delta)) / (2.0 *$a), "\n";
    echo "Root 2 of x=" .(-$b - sqrt($delta)) / (2.0 * $a), "\n";
    }
    else{
        echo "Root are imaginary";
    }
}
quadratic();
?>