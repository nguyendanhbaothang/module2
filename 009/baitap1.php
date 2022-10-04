<?php
class Stack {
    protected $stack=[];
    protected $lemit;
    public function __construct($limit){
        $this->limit = $limit;    
    }
    public function push($elm){
        array_unshift($this->stack,$elm);
    }
    public function pop(){
        if($this->isEmpty()==false){
            array_shift($this->stack);
        }else{
            echo 'Stack is empty';
        }
    }
    public function top(){
     current($this->stack);
    }
    public function isEmpty(){
        if (count($this->stack)==0){
            return true;
        }else{
            return false;
        }
     
    }
}
$objStack = new Stack(5);
$objStack->push('toán');
$objStack->push('văn');
$objStack->push('sử');
$objStack->push('địa');
$objStack->push('hóa');
echo $objStack->pop();
echo $objStack->pop();
echo $objStack->pop();
$objStack->push('gd');
$objStack->push('sinh');
echo $objStack->isEmpty();
echo $objStack->pop();
echo $objStack->pop();
echo $objStack->pop();
echo $objStack->pop();
echo $objStack->isEmpty();
echo '<pre>';
print_r($objStack);
die();