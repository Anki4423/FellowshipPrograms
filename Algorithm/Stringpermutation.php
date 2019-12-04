
<?php 
/**
 * @summary find how many combination makes using char within string
 * @globaltype 
 */
// permutations of a given string. 
function permutation($str, $l, $r)
{
    if ($l == $r)
        echo $str . "\n";
    else {
        for ($i = $l; $i <= $r; $i++) {
            $str = swap($str, $l, $i);
            permutation($str, $l + 1, $r);
            $str = swap($str, $l, $i);
        }
    }
}
/**
 * @description :swap the position here.
 * @globlaltype: $str
 * /
function swap($a, $i, $j)
{
    $temp;
    $charArray = str_split($a);
    $temp = $charArray[$i];
    $charArray[$i] = $charArray[$j];
    $charArray[$j] = $temp;
    return implode($charArray);
}
echo "Enter the string  ";
    fscanf(STDIN,"%s",$str);
    $n=strlen($str);

permutation($str, 0, $n - 1);

?>
