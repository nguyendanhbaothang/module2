<?php
$songuyen = [4,1,2,9,5,5,6,7];
$min = $songuyen[0];
for ($i=1; $i < count($songuyen);$i++){
    if ($songuyen[$i]<$min){
        $min = $songuyen[$i];
    }
}
echo $min;