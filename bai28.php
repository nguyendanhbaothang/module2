
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method='post'>
  <label for="">sothunhat</label><br>
  <input type="text"  name="sothunhat" ><br>
  <select name ='pheptinh'>
  <option value="+">cong</option>
  <option value="-">tru</option>
  <option value="*">nhan</option>
  <option value="/" selected>chia</option>
</select><br>
  <label for="lname">sothuhai</label><br>
  <input type="text"  name="sothuhai"><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $sothunhat = $_REQUEST['sothunhat'];
    $sothuhai = $_REQUEST['sothuhai'];
    $pheptinh = $_REQUEST['pheptinh'];
if($sothuhai!="" && $sothunhat!=""){
    switch ($pheptinh) {
         case '+':
           $ketqua = $sothunhat + $sothuhai;
            echo $ketqua;
            break;
            case '-':
             $ketqua = $sothunhat - $sothuhai;
             echo $ketqua;
             break;
             case '*':
             $ketqua = $sothunhat * $sothuhai;
             echo $ketqua;
            break;
             case '/':
                if($sothuhai == 0){
                    echo 'nhập số thứ hai lớn hơn 0';
                }else{
                    $ketqua = $sothunhat / $sothuhai;
                    echo $ketqua;
                }
                break;      
    }
} else{
    echo'nhập vào đi thằng ngu';
} 
}
?>