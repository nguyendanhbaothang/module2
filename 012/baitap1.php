<?php
$numbers = [1, 9, 4.5, 6.6, 5.7, -4.5];
for( $i = 0 ; $i < count($numbers); $i++ ){
    $min = $i;
    for( $j = $i + 1; $j < count($numbers); $j++  ){
        if( $numbers[$j] < $numbers[$min]  ){
            $min = $j;
        }
    }
    $temp = $numbers[$min];
    $numbers[$min] = $numbers[$i];
    $numbers[$i] = $temp;
}
echo '<pre>';
print_r($numbers);
die();