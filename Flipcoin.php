<?php
function flip()
{
echo "Enter number here do u want \n";
fscanf(STDIN, "%d", $num);
$head = 0;
$tail = 0;
$count = 0;
$headres = 0;
$tailres = 0;
while ($num > $count) {
  if (rand(0, 1) < 0.5) {
    $head++;
  } else {
    $tail++;
  }
  $count++;
}
//print the value of head and tail.
echo "head number of time=" . $head . "\n";
echo "tail number of time=" . $tail . "\n";
//print the precentage of head and tail.
$headres= ($head / $num) * 100;
echo "head precentage is=" . $headres . "\n";
$tailres= ($tail / $num) * 100;
echo "tail precentage is=" . $tailres. "\n";
}
flip()

?>
 
