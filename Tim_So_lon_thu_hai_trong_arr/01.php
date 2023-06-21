<?php
// quick sort
echo "Sắp Xếp Từ bé đến lớn:";
echo "</br>";
$arr = [3, 43, 5, 67, 31, 4];

for ($i = 0; $i < count($arr); $i++) {
    $min_index = $i;
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$j] < $arr[$min_index]) { // đổi dấu để sắp xêp từ lớn đến bé 
            $min_index = $j;
        }
    }
    $temp = $arr[$i];
    $arr[$i] = $arr[$min_index];
    $arr[$min_index] = $temp;
}
foreach($arr as $b)
{
    echo $b . " ";
}