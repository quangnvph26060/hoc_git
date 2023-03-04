<?php
// tính tổng của 1 số tự nhiên 
function number_1($number){
  $sum = 0;
        if($number>0){
          $number_digit  = $number%10 ;
          $sum  = $sum + $number_digit;
          $number  = ($number - $number_digit)/10;

        }
        return $sum;
      
}
$result = number_1(23);
echo $result;
