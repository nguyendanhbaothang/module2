<?php
   if ( $_SERVER['REQUEST_METHOD']== 'POST') {
   
    $ts_a = $_REQUEST['ts_a'];
    $ts_b = $_REQUEST['ts_b'];
    $ts_c = $_REQUEST['ts_c'];
    $height = $_REQUEST['height'];

class Shape {
    public $side1;
    public $side2;
    public $side3;
    public function __construct($ts_a,$ts_b,$ts_c){
        $this->a = $ts_a;
        $this->b = $ts_b;
        $this->c = $ts_c;
    }   
    public function setA($ts_a){
        $this->a=$ts_a;
    }
    public function getA(){
        return $this->ts_a;
    }
    public function setB($ts_b){
        $this->b=$ts_b;
    }
    public function getB(){
        return $this->ts_b;
    }
    public function setC($ts_c){
        $this->c=$ts_c;
    }
    public function getC(){
        return $this->ts_c;
    }
    public function getPerimeter(){
        return 'Chu vi của tam giác là :'.$this->a+$this->b+$this->c;
    }
    public function toString(){
        return 'ngu vừa thôi';
    }  
}
class Triangle extends Shape{
    public $height;
    public function __construct($ts_a,$ts_b,$ts_c,$height){
        parent::__construct($ts_a,$ts_b,$ts_c);
        $this->height=$height;
    }
    public function getArea(){
        return 'Diện tích của tam giác là :'.($this->a*$this->height)/2;
    }
}
$Triangle = new Triangle($ts_a,$ts_b,$ts_c,$height);
echo $Triangle->getPerimeter();
echo '<br>';
echo $Triangle->getArea();
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
  <label for="fname">Nhập a:</label><br>
  <input type="text" id="" name="ts_a" ><br>
  <label for="lname">Nhập b:</label><br>
  <input type="text" id="" name="ts_b" ><br><br>
  <label for="fname">Nhập c:</label><br>
  <input type="text" id="" name="ts_c" ><br>
  <label for="lname">Nhập height:</label><br>
  <input type="text" id="" name="height" ><br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>