<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="07.php" method="post">
        <label for="">Nhập N :</label>
        <input type="number" name="n">
        <input type="submit" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $n = $_POST['n'];
        echo "Các số từ 0 -> n :" . "<br>";
        for ($i = 0; $i <= $n; $i++) {
            echo $i . " ";
        }
        echo  "<br>";
        echo "Các số từ 0 -> n là số lẻ  :" . "<br>";
        for ($i = 0; $i <= $n; $i++) {
            if ($i & 1) { // các số lẻ 
                echo $i . " ";
            }
        }
        echo  "<br>";
        $array = []; // mảng rỗng
        for ($i = 0; $i <= $n; $i++) {
           $array[] = $i;
        }

       foreach ($array as $index => $item){
            if($item == 2){
                echo "index :" . $item;
            }
       }
       $arr  = [34,123,4,5,-10,4,644];
      
       echo "<br>";
      
       echo "số lớn nhất :";
       echo max($arr);
         
       echo "<br>";
      
       echo "số bé nhất :";
       echo min($arr);

    }


    ?>
</body>

</html>