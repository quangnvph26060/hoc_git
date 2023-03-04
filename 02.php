<?php
// tìm số lớn nhất trong mảng 
$array =[100,1,40,-1,20,-5];
echo min($array) . '<br>'; 
echo max($array);
$max = null; 
$position = null;
for ($i = 0; $i < count($array); $i++)
{
   
    if ($max == null){
        $max = $array[$i]; //  giá trị trong mảng 
        $position = $i;// index trong mảng
    }
    else {
        // muốn tìm số nhỏ và index của nó thì đổi dấu 
        if ($array[$i] > $max){
            $max = $array[$i];
            $position = $i;
        }
    }
}
// sau khi đẩy lên git và ta lại vào code tiếp , ta muốn đẩy lên git tiếp ta dùng 3 câu lệnh git add . 
// git commit -m "day_len_git"
// git  push -u origin
echo "Giá trị lớn nhất là $max, nằm tại vị trí $position";
?>