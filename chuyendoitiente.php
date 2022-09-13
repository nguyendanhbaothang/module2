
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
  <label for="">Nhập số tiền USD cần chuyển đổi :</label><br>
  <input type="text"  name="USD" ><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $USD = $_REQUEST['USD'];
     $ketqua = $USD * 23000;
     echo 'số tiền VND là :'.$ketqua.'đ';
}
?>