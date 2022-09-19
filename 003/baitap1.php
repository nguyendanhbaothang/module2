<?php
if ( $_SERVER['REQUEST_METHOD']== 'POST') {
    $a= $_REQUEST['nhapsothunhat'];
    $b = $_REQUEST['nhapsothuhai'];
    $c = $_REQUEST['nhapsothuba'];

class BacHai {
    //thuộc tính
    public $a = '';
    public $b = '';
    public $c = '';
    public function __construct($ts_a,$ts_b,$ts_c){
        $this -> a = $ts_a;
        $this -> b = $ts_b;
        $this -> c = $ts_c;
    }
    //phương thức
    public function setA($a){
        $this -> a = $a;
    }
    public function getA(){
        return $this -> a;   
    }
    public function setB($b){
        $this -> b = $b;
    }
    public function getB(){
        return $this -> b;
    }
    public function setC($c){
        $this -> c = $c;
    }
    public function getC(){
        return $this -> c;
    }
    public function getDiscriminant(){
        return (($this -> b*$this -> b)-4*$this -> a*$this -> c);
    }
    public function GetRoot1 () {
        $delta = $this ->getDiscriminant();
        if($delta>0) {
            $x1 = (- $this ->b + sqrt ( $delta )) / (2 * $this ->a);
            $x2 = (- $this ->b - sqrt ( $delta )) / (2 * $this ->a);
            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        }
        else if($delta==0) {
            $x1 = (- $this ->b / (2 * $this ->a));
            echo "Phương trình có nghiệm kép: x1 = x2 = " . $x1;
        }
        else {
            echo "Phương trình vô nghiệm";
        }
    }
}
// khởi tạo đói tượng
$objBacHai = new BacHai($a,$b,$c);
$objBacHai->GetRoot1();
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
  <label for="fname">Nhập số thứ nhất</label><br>
  <input type="text" id="" name="nhapsothunhat"><br>
  <label for="lname">Nhập số thứ hai</label><br>
  <input type="text" id="" name="nhapsothuhai" ><br><br>
  <label for="lname">Nhập số thứ ba</label><br>
  <input type="text" id="" name="nhapsothuba" ><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>