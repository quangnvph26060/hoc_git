<?php
echo "số nguyên tố :";
for($num = 1 ; $num < 20; ++$num){
    $count = 0;
    for($i =2 ; $i<= sqrt($num);$i++){
        if($num %  $i ==0){
            $count++;
        }
    }
    if($count ==0 && $num >1){
        echo"$num". " ";
    }
}
echo "<br>";
echo "++ trước và ++ sau";
echo "<br>";
 $a = 1 ;
$b= 1;

 echo $a++; // trước khi cộng nó lấy giá trị ban đầu 

 echo ++$b; // nó lấy giá trị đươc cộng lên 

 