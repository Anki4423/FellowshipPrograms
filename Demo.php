<?php

echo "A = ";
$A = (float) fgets(STDIN);
if ($A == 0) {
  die("Not a quadratic equation\n");
}

echo "B = ";
$B = (float) fgets(STDIN);
echo "C = ";
$C = (float) fgets(STDIN);

$D = $B * $B - 4 * $A * $C;

if ($D == 0) {
  echo "x = ", -$B / 2.0 / $A, "\n";
  die();
}
if ($D > 0) {
  echo "x1 = ", (-$B + sqrt($D)) / 2.0 / $A, "\n";
  echo "x2 = ", (-$B - sqrt($D)) / 2.0 / $A, "\n";
} else {
  echo "x1 = (", -$B / 2.0 / $A, ", ", sqrt(-$D) / 2.0 / $A, ")\n";
  echo "x2 = (", -$B / 2.0 / $A, ", ", -sqrt(-$D) / 2.0 / $A, ")\n";
}

?>