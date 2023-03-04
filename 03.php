<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="03.php" method="post">
        SDT: <br>
        <input type="text" name="sdt">
        <?php echo isset($erorr['sdt']) ?   $erorr['sdt'] : ""; ?>
        <input type="submit" name="btn">
    </form>
    <?php
    // $error = array();

    if (isset($_POST['btn'])) {
        echo $_POST['sdt'] == "" ? $erorr['sdt'] = "vui lòng nhập" : "";
        echo '</br>';
        echo strlen($_POST['sdt']) < 5 ? $erorr['sdt'] = "vui lòng nhập > 5" : "";
        echo '</br>';
        $sdt =  substr($_POST['sdt'], 0, 2) == "03" ? $erorr['sdt'] = "nhập thành công ": $erorr['sdt']= "vui lòng nhập số vitejt nam ";
        // echo  substr($_POST['sdt'], 0, 2);
echo $sdt;

        
    } else {


        header('location:03.php');
    }

    ?>
</body>

</html>