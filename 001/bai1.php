 <?php
//checkin2:
// $age=18;
// if($age>=18){
//     echo 'Bạn được uống bia';
// }

//checkin3:
// $age=18;
// $money= true;
// if($age>=18&&$money==true){
//     echo 'Bạn được uống bia';
// }


// checkin4:
// $age = 18;
// $money = true ;
// if($age>=18|| $money == true){
//     echo 'Bạn được uống bia';
// }



//checkin5
// $age = 17;
// if(!($age >= 18)){
//     echo 'Bạn phải uống nước ngọt';
// }

//checkin6

// $money = true;
//  $quan_open = true;
//  $cho_no = true;
//  if($quan_open== true &&($cho_no == true||$money == true)){
//     echo 'bạn được nhậu';
//  }


//checkin7
// $money = true;
//  $quan_open = true;
//  $cho_no = true;
// if($quan_open== true &&($cho_no == true||$money == true)){
//     echo 'bạn được nhậu';
//  }else{
//     echo'bạn phải về nhà';
//  }

// checkin 9
// $day = 7;
// if ($day >= 2 && $day <= 6) {
//     echo 'Đi làm';
// } else if ($day == 7) {
//     echo 'xin hoạt CLB';
// } else {
//     echo 'relax';
// }


// checkin 11

// $month = 2 ;
// switch ($month){
//     case 1:
//         echo '31 ngày';
//         break;
//         case 2 :
//             echo '28 ngày';
//             break;
//             default ; 
//             echo '30 ngày';
// }


//checkin 12
// $day = 7;
// switch($day){
// case ($day == 2 || $day == 3 || $day == 4|| $day == 5|| $day == 6 );
//     echo 'đi làm';
// break;
// case ($day == 7);
// echo 'sinh hoạt CLB';
// break ;
// default;
// echo 'relax';

// }


//checkin 13
// $age= 17;
// echo ($age>=18)?"được uống bia" : "được uống rượu ";



//checkin 14:
// $day = 5;
// switch(true)
//     {
//         case ($day >= 2 && $day <= 6):
//        echo 'đi làm';
//        break;
//         case ($day == 7):
//           echo 'sinh hoạt' ;
//         break;
//         default:
//          echo 'relax';
//         break;
//     }


//checkin 15

// for($i=0; $i<=5;$i++){
// echo $i ;
// }



//checkin 16
// for ($i= 1; $i <= 10 ; $i++){
//     echo '5 x '.$i.' =' . 5* $i ;
//     echo '<br>';
// }




//checkin 17 
// for ($i=1; $i<=100; $i++){
//    if($i % 2== 0){
//     echo $i;
//    }
// }


//checkin 18
// for ($i=100; $i>=1;$i--){
//     if($i % 2 == 1){
//         echo $i;
//         echo '<br>';
//     }
// }


//checkin 19
// $tong = 0 ;
// for($i=1 ; $i <= 10;$i++){
//     $tong = $tong + $i;
// }
// echo $tong ;



//checkin 20 
// $i = 0;
//     while ($i <=5){
//         echo $i;
//         $i++;

//     }

//checkin 21
// $i = 10;
// while ($i >=1){
//     echo $i;
//     $i--;
// }



// checkin 22
// $i = 0;
// do{
//     echo $i;
//     $i++;
// }while ($i <= 5);


// checkin 23 
//     $i = 10;
// do{
//     echo $i;
//     $i--;
// }while ($i >= 5);


//checkin 24
// for ($i= 1; $i<=10; $i ++){
//     if ($i == 5){
//         break;

//     }
//     echo $i;
// }


// checkin 25 
// for ($i= 1; $i<=5; $i ++){
//     if ($i == 3 ){
//         continue;
//     }
//     echo $i;
// }



//checkin 26:
// for ($i = 1; $i <= 10; $i++) {
//     if ($i % 2 == 1) {
//         continue;
//     }
//     echo $i;
// }

// checkin 27

echo "<table>";
for ($i = 1; $i <= 8; $i ++){
 echo "<tr>";
for($j = 1; $j <= 3; $j ++){
 echo "<td>" . $i . $j. "</td>";
}
echo "</tr>";
}
echo "</table>";



