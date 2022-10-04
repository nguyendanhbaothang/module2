<?php
$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
$n= count($arr);
for($i=0;$i < $n-1;$i++){
    for($j = $n-1;$j>$i;$j--){
        if($arr[$j]<$arr[$j-1]){
            $temp = $arr[$j-1];
            $arr[$j-1]=$arr[$j];
            $arr[$j]=$temp;
        }
    }
}
echo '<pre>';
print_r($arr);