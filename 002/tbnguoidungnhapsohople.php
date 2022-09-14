<?php
function calculate($x,$y){
    echo "tổng là : ".$x + $y ;
    echo '<br>';
    echo "hiệu là : ".$x - $y ;
    echo '<br>';
    echo "tích là : ".$x * $y ;
    echo '<br>';
    if( $y == 0){
        echo 'mẫu số phải khác 0' ;
    }else{
        echo "thương là : ".$x / $y ;
    }
}
$calculate = calculate(2,8);


