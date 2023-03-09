<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="04.php" method="post">
        Email: <br>
        <input type="text" name="email">
        <?php echo isset($erorr['email']) ?   $erorr['email'] : ""; ?>
        <input type="submit" name="btn">
    </form>
    <?php
    // $error = array();

    if (isset($_POST['btn'])) {
       if(empty($_POST['email'])){// empty kiểm tra biến có rỗng hay không 
             echo   $erorr['email'] = "vui lòng nhập email";
       }elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            echo   $erorr['email'] = "vui lòng nhập email 3";
       }
        
    } 

    ?>
</body>

</html>