<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $InventmentAmount = $_REQUEST['InventmentAmount'];
    $YearlyInterestRate = $_REQUEST['YearlyInterestRate'];
    $NumberofYears = $_REQUEST['NumberofYears'];
$result = $InventmentAmount + ($InventmentAmount*($YearlyInterestRate/100)*$NumberofYears);
echo $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
  <label for="">InventmentAmount</label><br>
  <input type="text"  name="InventmentAmount"><br>
  <label for="">YearlyInterestRate</label><br>
  <input type="text"  name="YearlyInterestRate" ><br>
  <label for="">NumberofYears</label><br>
  <input type="text"  name="NumberofYears"><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>