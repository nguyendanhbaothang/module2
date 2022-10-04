<?php
class Mylist{
        private $size;
        private $elements = [];
        public $arr = [];
    public function insert($index,$element)
    {
        array_splice($this->elements,$index,2);
    }
    public function add($element){
        if(!$this->size()){
            array_push($this->elements,$element);
        }
        else{
            return "bộ nhớ đầy";
        }
    }
    public function removeByIndex($index) {
         unset($this->elements[$index]);
    }
    public function get($index)
     {
        if(isset($this->elements[$index])) {
            return $this->elements[$index];
        }
        else{
            return false;
        }
    }
    public function clear()
    {
         return  $this->elements =[];
    }
    public function addAll($arr)
     {
       $this->elements = $arr;
     }
    public function indexOf($element) {
        array_keys($this->elements, $element);
     }
    public function isEmpty()
     {
        if(count($this->elements)==0) {
            return true;
        }
        else{
            return false;
        }
    }
    public function sort() {
        return sort($this->elements);
    }
    public function reset()
     {
        return  $this->elements =[];
    }
    public function size()
    {
        if(count($this->elements)>=5) {
            return  true;
        }
        else{
            return false;
        };
    }
    public function getElement() {
        return $this->elements;
    }
}
$mylist = new Mylist(3);
$mylist->addAll([3,3]);
$mylist->add(6);
$mylist->add(4);
$mylist->add(2);
$mylist->removeByIndex(1);
$mylist->add(1);
$mylist->sort();
// $mylist->reset();
echo '<pre>';
print_r( $mylist->getElement());
echo $mylist->add(9);
?>



