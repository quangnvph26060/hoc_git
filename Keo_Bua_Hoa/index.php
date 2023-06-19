<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <p>Ra Gì Nói Luôn </p>
        <p>1:kéo , 2:Búa ,3:Hoa</p>
        <input type="text" name="valueInput">
        <br>
    
        <input type="submit" name="btn">

    </form>
    <?php

    $boss = mt_rand(1, 3); // mt_rand(min,max) sẽ cho ra có các số nằm trong khoảng min max đó
    echo "Của Thằng máy : " . $boss;
    if (isset($_POST['btn'])) {
        // tạo 1 mảng rộng để kiểm tra
        $error = [];
        $ra_cai_gi = $_POST['valueInput'];
        echo "</br>";
        echo "Của Người Chơi Nhập :" .  $ra_cai_gi;
        echo "</br>";
        if (!empty($ra_cai_gi) && $ra_cai_gi == 1 || $ra_cai_gi ==2 || $ra_cai_gi == 3 ) {
            switch ($boss) {
                case '1':
                    if ($ra_cai_gi == 1) {
                        echo      "Hòa Ok !!!";
                    } else if ($ra_cai_gi > 1 && $ra_cai_gi == 2) {
                        echo  ' Boss Thua';
                    } else {
                        echo   "Boss Win ok chưa @@";
                    }
                    break;
                case '2':

                    if ($ra_cai_gi == 2) {
                        echo      "Hòa Ok !!!";
                    } else if ($ra_cai_gi > 1) {
                        echo  ' Boss Thua';
                    } else {
                        echo   "Boss Win ok chưa @@";
                    }
                    break;
                case '3':
                    if ($ra_cai_gi == 3) {
                        echo      "Hòa Ok !!!";
                    } else if ($ra_cai_gi < 3 && $ra_cai_gi == 2) {
                        echo  'Boss Win ok chưa @@';
                    } else {
                        echo   "Boss thua";
                    }
                    break;
            }
        } else {
         echo   " Vui Lòng Nhập đi ok !!";
        }
    }
    ?>
</body>

</html>