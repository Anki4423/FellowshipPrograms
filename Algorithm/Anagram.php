<?php 
/**
 * @summary strings are anagram or not 
 * @param  var$str for first string,$str1 for second string
 * @param $len1 for length of str & $len2 for length of str1
 */
// PROGRAM FOR ANAGRAM STRING 

     echo "Enter the first string ";
    fscanf(STDIN,"%s",$str);
    $len1=strlen($str);
    echo"Enter second string ";
    fscanf(STDIN,"%s",$str1);
    $len2=strlen($str1);
    $arr=str_split($str);
    $arr1=str_split($str1);
    $found=0;
    $not_found=0;
 // condition check
     if($len1==$len2)
     {
         $len=$len1;
         //loop increment
        for($i=1;$i<$len;$i++)
        {
            for($j=0;$j<$len;$j++)
            {
                $found=0;
                if($arr==$arr1)
                {
                    $found=1;
                   break;
                }
            }
            if($found==0)
            {
                $not_found=1;
                 break;
            }
        }
        if($not_found=1)
        {
            echo"string are not anagram ";

        }
     
       else
        {
         echo"string are anagram";
        }
 }


?>