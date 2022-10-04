<?php
$numbers = [5,8,9,6,2,5,1,3,4];
$find = 5;
$count = 0;
foreach ($numbers as $key => $value){
    if($value == $find){
        $count++;
    }
}
echo 'Tìm thấy số '.$find.' xuất hiện '.$count.' lần ' ;
 