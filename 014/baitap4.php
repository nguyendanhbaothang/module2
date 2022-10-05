<?php
$input = '0912345678,0905111222,0978444333,0942345678';
$numbers = explode(',',$input);

// $numbers = ['0912345678','0905111222','0978444333','0942345678'];
$vinas = [];
$mobis = [];
$vietels = [];
foreach( $numbers as $number ){
    $pattern = '/^091/';//Bắt đầu 091
    $pattern = '/^(091|094)/';//Bắt đầu 091 Hoặc 094
    if (preg_match($pattern, $number)) {
        // array_push($vinas,$number);
        $vinas[] = $number;
    }

    $pattern = '/^(090|092)/';
    // Kiem tra -> push vao mobis
    if (preg_match($pattern, $number)) {
        $mobis[] = $number;
    }

    $pattern = '/^(097|096)/';
    // Kiem tra -> push vao vietels
    if (preg_match($pattern, $number)) {
        $vietels[] = $number;
    }
}
echo "<pre>";
echo 'số vinaphone là :';
print_r($vinas);
echo "</pre>";

echo "<pre>";
echo 'số mobile là :';
print_r($mobis);
echo "</pre>";

echo "<pre>";
echo 'số viettel là :';
print_r($vietels);
echo "</pre>";
