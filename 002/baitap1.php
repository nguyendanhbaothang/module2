<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $tennguoidung = $_POST['tennguoidung'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    if(empty($tennguoidung)){
        echo 'bạn chưa nhập tên';
     }
     if(empty($email)){
        echo 'bạn chưa nhập email';
     }
     if(empty($dienthoai)){
        echo 'bạn chưa nhập số điện thoại ';
     }
}
?>
<form action="" method="post">
  <label for="fname">Tên người dùng</label><br>
  <input type="text" name="tennguoidung" ><br>
  <label for="lname">Email</label><br>
  <input type="text"  name="email" ><br>
  <label for="lname">Điện thoại</label><br>
  <input type="text"  name="dienthoai" ><br><br>
  <input type="submit" value="Đăng nhập">
</form>