<?php
$arr = [4,5,6,7,3,35,43];
if(isset($_POST['btn'])){
    $del = $_POST['phantu_del'];
    $newarr = [];
    print_r($newarr);
    foreach($arr as $in => $i){
        if($i == $del){
          $index = $in;
         $a= array_splice($arr,$index,1); // cách 1
        // unset($arr[$in]); cách 2
        // array_splice($arr, $in, 1); // cách 3
         // các cách đều xóa phần tử đi 
         $newarr[] = $arr; // đẩy vào mảng rỗng 
         print_r($newarr);
        }
     
    }   
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Các giá trị trong array:</p>
<?php 
//   $a =  array_unique($arr); 

// echo var_dump($a)
// array_unique loại bỏ các giá trị trùng lặp khỏi một mảng.
?>
    <?php foreach($arr as $item ):?>
        <span><?= $item?></span>
        <?php endforeach?>
    <p>Nhập phần tử bạn muốn xóa :</p>
   <form action="08.php" method="post">
   <input type="text" name="phantu_del">
    <input type="submit" name="btn"> 
    <?php  echo isset($tb['phantu_del']) ? $tb['phantu_del'] : ""?>
   </form>
</body>
</html>