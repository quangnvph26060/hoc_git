<?php
$arr = [5, 12, 3, 121,14];

$max_arr = max($arr);
echo "Giá trị lớn nhất đầu tiên của mảng là :" . $max_arr;
echo "</br>";
$index_arr =  array_search($max_arr , $arr); // index của giá trị lớn nhất
unset($arr[$index_arr]);

// cachs1 
echo "Số lớn thư hai :". max($arr);

// cách 2  đang lỗi 
// đang lỗi

// $max = null;
// for ($i = 0; $i < count($arr); $i++) {

//     if ($max == null ) {

//         $max = $arr[$i];
       
//     }else{
//         if ($arr[$i] > $max){
//             $max = $arr[$i];
         
//         }
//     }
// }

// echo "Số lớn thứ hai  là : " . $max . " ";

// end đang lỗi


// "array_search" là một hàm được sử dụng để tìm kiếm một
//  giá trị cụ thể trong một mảng và trả về chỉ mục của giá trị đó nếu nó được tìm thấy trong mảng
