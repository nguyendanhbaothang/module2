<?php
class Bracket{
    public array $stack;
    public function __construct(){
        $this->stack = [];
    }
    public function isEmpty(): bool{
        return empty($this->stack);
    }
    function hasMatchedParenthesis($string) {
        $string = str_split($string);
        $stack = array();
        foreach($string as $key=>$value){
            switch ($value) {
                case '(': array_push($stack, 0); break;
                case ')':
                    if (array_pop($stack) !== 0)
                        return false;
                break;
                case '[': array_push($stack, 1); break;
                case ']':
                    if (array_pop($stack) !== 1)
                        return false;
                break;
                default: break;
                case '{': array_push($stack, 2); break;
                case '}':
                    if (array_pop($stack) !== 2)
                        return false;
                break;
            }
        }
        return (empty($stack));
    }
    public function isTrue($string)
    {
        if ($this->hasMatchedParenthesis($string)) {
            echo "Đúng rồi nè";
        } else {
            echo "Sai công thức";
        }
    }
}
$checkBracket = new Bracket();
$string1 = "s * (s – a) * (s – b) * (s – c) ";
echo $string1."<br>";
echo $checkBracket->isTrue($string1)."<hr>";
$string2 =  "(– b + (b2 – 4*a*c)^0.5) / 2*a";
echo $string2."<br>";
echo $checkBracket->isTrue($string2)."<hr>";
$string3 = " s * (s – a) * (s – b * (s – c)";
echo $string3."<br>";
echo $checkBracket->isTrue($string3)."<hr>";
$string4 = "s * (s – a) * s – b) * (s – c) ";
echo $string4."<br>";
echo $checkBracket->isTrue($string4)."<hr>";
$string5 = "(– b + (b^2 – 4*a*c)^(0.5/ 2*a))";
echo $string5."<br>";
echo $checkBracket->isTrue($string5)."<hr>";







