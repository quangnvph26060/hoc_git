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
git init
git remote add origin https://github.com/quangnvph26060/hoc_git.git
git commit -m "day_len_git" nếu lỗi thì chạy câu lệnh  git branch -M main
git push -u origin