<?php
interface Colorable{
    function  howToColor();
}
class Square implements Colorable{
    public function  howToColor(){
        return ' Color all four sides';
    }
    public int $edge;
    public function __construct($edge){
        $this->edge=$edge;
    }
    public function setEdge($edge){
        $this -> edge = $edge;
    }
    public function getEdge(){
        return $this -> width;   
    }
    public function Area(){
        return  $this->edge * $this->edge;
    }
    public function Perimeter(){   
        return $this->edge*4;
    }
}
$square = new Square(5);
echo $square->Area();
echo '<br>';
echo $square->Perimeter();
echo '<br>';
echo $square->howToColor();



