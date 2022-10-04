<?php
class Dance{
    public $name;
    public $gender;
    public function __construct($ts_name,$ts_gender){
        $this->name = $ts_name;
        $this->gender = $ts_gender;
    }
}
$maleQueue = new SplQueue();
$maleQueue->enqueue (new Dance('Bảo Thắng','male'));
$maleQueue->enqueue(new Dance(' NHân','male'));
$maleQueue->enqueue(new Dance('Linh','male'));
$maleQueue->enqueue(new Dance('X Thắng','male'));
$maleQueue->enqueue(new Dance('Phong Tâm','male'));
$maleQueue->enqueue(new Dance('Tài Tâm','male'));

$femaQueue = new SplQueue();
$femaQueue->enqueue(new Dance('Duy','female'));
$femaQueue->enqueue(new Dance('Huyền','female'));
$femaQueue->enqueue(new Dance('Thảo Tâm','female'));
$femaQueue->enqueue(new Dance('P Thảo','female'));
$femaQueue->enqueue(new Dance('Thắm','female'));




$maleQueue->rewind();


$femaQueue->rewind();



$pairs=[];
$female_waitting =[];
$male_waitting =[];
while($maleQueue->valid()||$femaQueue->valid()){
    if($maleQueue->valid()&&$femaQueue->valid()){
        $pairs[]=[
            'male'=>$maleQueue->current(),
            'female'=>$femaQueue->current(),
        ];
        $maleQueue->next();
        $femaQueue->next();
    }elseif(!$femaQueue->valid()){
        $male_waitting[]= $maleQueue->current();
        $maleQueue->next();
    }elseif(!$maleQueue->valid()){
        $female_waitting[]= $femaleQueue->current();
        $femaleQueue->next();
    }
}
echo '<pre>';
print_r($pairs);
print_r($female_waitting);
print_r($male_waitting);
die();
