<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="11.php" method="post">
        <input type="text" name="ten">
        <input type="submit" name="btn">
        <h1><?php echo isset($success['a']) ? $success['a'] : "" ?></h1>
    </form>
    <?php

        if(isset($_POST['btn'])){
            $ten = $_POST['ten'];
            switch($ten){
                case 'quang':
                    echo  $success['a'] =  "quang";
                    break;
                    case 'quang 1':
                        echo  $success['a'] =  "quang 1";
                        break;
                        default:
                        echo $success['a'] =  "1";
                    
            }
          
           
        }
        $a = 0;
        while($a < 5){
                echo "123"." ";
                $a++;
             
        }


        $b =0;
        do {
            echo "dowhile"." ";
           $b++;
        } while ($b <= 10);
        
    ?>
    
</body>
</html>