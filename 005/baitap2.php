<?php
class Point2D {
    public $x;
    public $y;
    public function __construct($x,$y){
        $this-> x = $x;
        $this-> y = $y;
    }
    public function getX(){
        return $this -> X;   
    }
    public function getY(){
        return $this -> Y;
    }
    public function setX($x){
        $this -> x = $x;
    }
    public function setY($y){
        $this -> y = $y; 
    }
    public function setXY($ts_xy){
        $this -> x * $this -> y = $ts_xy;
     
    }
    public function getXY(){
        return [$this -> x * $this -> y];
     
    }
    public function toString() {
        echo 'đây là lớp 2D';
    }
}
class Point3D extends Point2D{
    public $z;
    public function __construct($x,$y,$z) {
        Parent::__construct($x,$y);
        $this->z = $z;
    }
    public function getZ(){
        return $this -> z;
   }
   public function setZ($z){
    $this -> z = $z;
   }
   public function setXYZ($ts_xyz){
    $this -> x * $this -> y * $this ->z = $ts_xyz;
   }
   public function getXYZ(){
    return [$this -> x * $this -> y * $this ->z];
   }
   public function toString() {
    echo 'đây là lớp 3D';
}
 
}
$objPoint2D = new  Point2D (5,8);
print_r($objPoint2D -> getXY()) ;
echo '<br>';
$objPoint3D = new  Point3D (5,8,9);
print_r($objPoint3D -> getXYZ()) ;