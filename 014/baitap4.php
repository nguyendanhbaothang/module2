<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $nhap = $_REQUEST['nhap'];
    $pattern = '/^\([0-9]{2,2}\)\-\([0-9]{10,10}\)$/';
        if (preg_match($pattern, $nhap)) {
            echo 'Số điện thoại : '.$nhap.' hợp lệ .';
        } else {
            echo 'Số điện thoại : '.$nhap.' không hợp lệ';
        }      
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
  <label for="fname">Nhập số điện thoại muốn kiểm tra :</label><br>
  <input type="text" id="" name="nhap" value=""><br>
  <input type="submit" value="Kiểm tra">
</form>

<h5>-Số điện thoại hợp lệ cần đạt theo mẫu sau: (xx)-(0xxxxxxxxx).</h5>
<h5> + x là ký tự số .</h5>
<h5>+Không chứa các ký tự đặc biệt .</h5>
<h5>-Ví dụ số điện thoại hợp lệ: (84)-(0978489648) .</h5>
<h5>-Ví dụ tên lớp không hợp lệ: (a8)-(22222222) .</h5>
</body>
</html>