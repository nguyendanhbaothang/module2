<?php
// $arr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
// $n= count($arr);
// for($i = 1;$i < $n;$i++){
//     $j = $i - 1;
//     $temp = $arr[$i];
//     while( $arr[$j] < $temp && $j >= 0){
//         $arr[$j + 1]= $arr[$j];
//         $j --;
//     }
//     $arr[$j + 1] = $temp ;
// }
// echo '<pre>';
// print_r($arr);




function insertionSort($list){
    for($i=0;$i<count($list);$i++){
        $count = $list[$i];
        $j = $i - 1;
        while($j >= 0 && $list[$j] < $count){
            $list[$j+1] = $list[$j];
            $j--;
        }
        $list[$j+1] = $count;
    }
    return $list;
}
$MyArr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
echo "Original Array <br>";
echo implode(', ',$MyArr);
echo "<br>Sort Array <br>";
echo implode(', ',insertionSort($MyArr));