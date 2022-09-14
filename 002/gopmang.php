<?php
    $monhoc =['Toan','Ly','Hoa'];  
    $monhoc1 = ['Van','Su','Dia'];
    $monhoc2 = [];
   for($i= 0; $i < count($monhoc);$i ++){
    array_push($monhoc2,$monhoc[$i]);
   }
   for($J= 0; $J < count($monhoc1);$J ++){
    array_push($monhoc2,$monhoc1[$J]);
   }
   echo '<pre>';
  print_r($monhoc2) ;
  echo '</pre>';
