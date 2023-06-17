<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <input type="text" name="so">
        <input type="submit" placeholder="Gửi" name="btn">
    </form>
    <?php
    if (isset($_POST['btn'])) {
        $value_input = $_POST['so'];
        if ($value_input > 0) {
            $a = sqrt($value_input); // căn bậc 2 
            $b = $value_input / $a;
            
            if (ceil($b) == $a) { // làm tròn ceil
                echo $value_input ." là số chính phương";
            }else{
                echo $value_input ." không là số chính phương";
            }
        }
    }
    ?>
</body>

</html>