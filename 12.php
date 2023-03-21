<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ATM</h1>
    <form action="" method="post">
        <input type="sotien" name="tien">
        <input type="submit" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $tien = $_POST['tien'];
        define('t500', 500);
        define('t200', 200);
        define('t100', 100);
        $totien5 = 0;
        $totien2 = 0;
        $totien1 = 0;
        $tongtien=0;
        if ($tien > 0) {
            while ($tien >= 500) {
                $tien =  $tien - t500;

               $totien5++;
            }
            while ($tien >= 200) {
                $tien =  $tien - t200;

               $totien2++;
            }
            while ($tien >= 100) {
                $tien =  $tien - t100;

               $totien1++;
            }
            $tongtien = $totien5*t500 + $totien2*t200 + $totien1*t100;
        }
    }

    ?>
    <table border="1">
        <tr>
            <th>Mệnh Giá</th>

            <th>Số Lượng</th>
            <td>Tống Mệnh Giá</td>
        </tr>
        <tr>
            <td>
                500.000đ
            </td>
            <td><?= $totien5?></td>
            <td>
                <?= number_format( $totien5*t500)?>
            </td>
        </tr>
        <tr>
            <td>
                200.000đ
            </td>
            <td><?= $totien2?></td>
            <td>
                <?= number_format( $totien2*t200)?>
            </td>
        </tr>

        <tr>
            <td>100.000đ</td>
            <td><?= $totien1?></td>
            <td>
                <?= number_format( $totien1*t100)?>
            </td>
        </tr>
        <tr>
            <td>50.000đ</td>
        </tr>
        <tr>
            <td>
                20.000đ
            </td>
        </tr>
        <tr>
            <td>10.000đ</td>
        </tr>
        <tr>
            <td>
                5.000đ
            </td>
        </tr>
        <tr>
            <td>
                2.000đ
            </td>

        </tr>
        <tr>
            <td>
                1.000đ
            </td>
        </tr>

    </table>
    <p>Tổng Tiền : <?= number_format($tongtien)?></p>
</body>

</html>