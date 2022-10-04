<?php
class Node {
    protected $value = [];
    protected $next;
    public function __construct($next){
        $this-> next = $next;
    }
}
class Queue extends Node {
    protected $front;
    protected $back;  
    public function isEmpyti(){
        if (count($this->value)==0){
            return true;
        }else{
            return false;
        }
}
    public function enqueue($elm){
            array_push($this->value,$elm);      
    }
    public function dequeue(){
            array_shift($this->value);
    }
}
$obiQueue = new Queue (3);
$obiQueue->enqueue('Văn');
$obiQueue->enqueue('Sử');
$obiQueue->enqueue('Địa');
$obiQueue->dequeue();
$obiQueue->dequeue();
$obiQueue->isEmpyti();
$obiQueue->enqueue('Toán');
$obiQueue->enqueue('Văn');
$obiQueue->dequeue();
$obiQueue->dequeue();
$obiQueue->dequeue();
$obiQueue->isEmpyti();
echo '<pre>';
print_r($obiQueue);
die();
