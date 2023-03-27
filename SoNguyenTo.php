<?php
echo "kiểm tra số đó có phải là số nguyên tố hay ko ";
echo "<br>";
$co  = true;
$n =97;
for( $i = 2 ; $i < $n ; $i++){
    if($n %$i == 0){
        $co = false;
        break;
    }
}
if($n != 1 && $co == true){
    echo  ' là số nguyên tố ';
}else{
    echo  'ko là số nguyên tố ';
}
echo "<br>";

echo "số nguyền tố tù 1 đến 100"; 
echo "<br>";
for($i = 1 ; $i < 100 ; ++$i){
    $count =0;
    for($j = 2 ; $j < $i ; $j ++){
        if($i % $j == 0){
            $count++;
        }
    }

    if($count == 0 && $i>1){
        echo $i." ";
    }
}

?>