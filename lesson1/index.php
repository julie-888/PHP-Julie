<?php
class MyCalculator {
private $FirstNumber, $SecondNumber;
public function __construct( $Value1, $Value2 ) {
$this->FirstNumber = $Value1;
$this->SecondNumber = $Value2;
}
public function Addition() {
return $this->FirstNumber + $this->SecondNumber;
}
public function Subtraction() {
return $this->FirstNumber - $this->SecondNumber;
}
public function Multiplication() {
return $this->FirstNumber * $this->SecondNumber;
}
public function Division() {
return $this->FirstNumber / $this->SecondNumber;
}
public function Square() {
    return $this->FirstNumber * $this->FirstNumber;
}
public function SqRoot() {
    return sqrt($this->FirstNumber);
}
}
$mycalc = new MyCalculator(6, 3); 
echo $mycalc-> Addition()."\n"; // Displays 9 
echo $mycalc-> Multiplication()."\n"; // Displays 18
echo $mycalc-> Subtraction()."\n"; // Displays 3
echo $mycalc-> Division()."\n"; // Displays 2
echo $mycalc-> Square()."\n"; // Displays 36
echo $mycalc-> SqRoot()."\n"; // Displays 

?>