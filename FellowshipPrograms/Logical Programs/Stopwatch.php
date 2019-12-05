<?php 
  
// Starting clock time in seconds 
$start_time = microtime(true); 
$a=1; 
  
// Start loop 
for($i = 1; $i <=1000; $i++) 
{ 
    $a++; 
}  
  
// End clock time in seconds 
$end_time = microtime(true); 
  
// Calculate  execution time 
$executiontime = ($end_time - $start_time); 
  
echo " Execution time  = ".$executiontime." sec"; 
?> 