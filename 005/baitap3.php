<?php
class Point {
    public $x;
    public $y;
    public function __construct($x,$y) {
    $this ->x =$x;
    $this ->y =$y;
    }
    public function getX(){
        return $this->x ;
    }
    public function getY(){
        return $this->y ;
    }
    public function setX($x){
        $this->x=$x;
    }
    public function setY($y){
        $this->y=$y;
    }
    public function setXY($ts_xy){
        $this->x*$this->y=$ts_xy;
    }
    public function getXY(){
        return [$this->x*$this->y];
    }
    public function toString(){
        echo 'đây là mảng point';
    }
    }

    class MoveablePoint extends Point{
        public $xSpeed;
        public $ySpeed;
        public function __construct($x,$y,$xSpeed,$ySpeed){
            parent::__construct($x,$y);
            $this->xSpeed=$xSpeed;
            $this->ySpeed=$ySpeed;
        }
        public function getXSpeed(){
            return $this->x;
        }
        public function setXSpeed($xSpeed){
            $this->x=$xSpeed;
        }
        public function getYSpeed(){
            return $this->y;
        }
        public function setYSpeed($ySpeed){
            $this->y=$ySpeed;
        }
        public function getSpeed():array{
            return [$this->xSpeed*$this->ySpeed];
        }
        public function move(){
            return $this->xSpeed;
        }
        public function toString(){
            echo  'đây là point';
        }
    }
    $MoveablePoint = new MoveablePoint(4,5,1,7);
    print_r($MoveablePoint->getSpeed());