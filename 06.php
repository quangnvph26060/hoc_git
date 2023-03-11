<?php
$array  = [1,23,4,5,-12,334,5,59,23];
$a= min($array); // min giá trị bé nhất trong mảng 

$b = max($array);// max giá trị bé nhất trong mảng 
echo $a;
echo $b;

////////////////
echo" </br>";
$array  = [1,23,4,5,-12,334,5,59,23];
foreach($array as $index=>$item){
    if($item == 23){
        // tìm trong mảng có giá trị nào bằng 23 ko 
        echo $item . " ";
        echo "index của phân tử: ";
        echo $index;

    }
}
?>