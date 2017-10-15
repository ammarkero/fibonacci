<?php //php 7.0.8

    $i = 0;
$j = 1;
$k = 1;
$total = 0;
while($k < 4000000){
    $i = $j;
    $j = $k;
    $k = $i + $j;
    if($k % 2 == 0){
        $total += $k; 
    }
}

echo $total;
    
?>