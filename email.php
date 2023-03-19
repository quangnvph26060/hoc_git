<!DOCTYPE html>
<html>
<body>
<!-- // kiểm tra xem có phải là email hay ko  -->
<?php
$str = "<h1>quangnvpj25050@gmail.com</h1>";
$newstr =(filter_var($str, FILTER_VALIDATE_EMAIL) == false)  ?  2 : 3;
echo $newstr;
?>

</body>
</html>
