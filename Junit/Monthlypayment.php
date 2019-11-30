// PROGRAM TO CALCULATE MONTHLY PAYMENT
<?php 
function payment()
{
    echo "Enter the years to payoff ";
    fscanf(STDIN,"%d",$year);
    echo "Enter the principal loan amount ";
    fscanf(STDIN,"%d",$principal);
    echo "Enter the rate of interest";
    fscanf(STDIN,"%f",$interest);
    $r=$interest/(12*100);
    $n=12*$year;
    $payment=$principal*$r/1-pow(1+$r,(-$n));
    echo " salary of month " .$payment;

}
payment();
?>