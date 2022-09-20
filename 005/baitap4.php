<?php
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
        return 'Diện tích của tam giác là :'.($this->b*$this->c*$this->height)/2;
    }
}
$Triangle = new Triangle(6,6,6,10);
echo $Triangle->getPerimeter();
echo '<br>';
echo $Triangle->getArea();