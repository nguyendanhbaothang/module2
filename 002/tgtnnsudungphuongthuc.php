<?php
function getMin($array){
    $min = $array[0];
    for ($i=1; $i < count($array);$i++){
        if ($array[$i]<$min){
            $min = $array[$i];
        }
    }
    return $min;
}
$array = array(9,8,3,1,2,4,5,6,7);
echo getMIn($array);
