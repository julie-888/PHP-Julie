<?php
class Addition {
    private $FirstNumber, $SecondNumber;
    public function __construct( $Value1, $Value2 ) {
    $this->FirstNumber = $Value1;
    $this->SecondNumber = $Value2;
    }
    public function Addition() {
        return $this->FirstNumber + $this->SecondNumber;
}
}

class Subtraction {
    private $FirstNumber, $SecondNumber;
    public function __construct( $Value1, $Value2 ) {
    $this->FirstNumber = $Value1;
    $this->SecondNumber = $Value2;
    }
    public function Subtraction() {
        return $this->FirstNumber - $this->SecondNumber;
}
}

class Multiplication {
    private $FirstNumber, $SecondNumber;
    public function __construct( $Value1, $Value2 ) {
    $this->FirstNumber = $Value1;
    $this->SecondNumber = $Value2;
    }
    public function Multiplication() {
        return $this->FirstNumber * $this->SecondNumber;
}
}

class Division {
    private $FirstNumber, $SecondNumber;
    public function __construct( $Value1, $Value2 ) {
    $this->FirstNumber = $Value1;
    $this->SecondNumber = $Value2;
    }
    public function Division() {
        return $this->FirstNumber / $this->SecondNumber;
}
}

class Square {
    private $FirstNumber, $SecondNumber;
    public function __construct( $Value1, $Value2 ) {
    $this->FirstNumber = $Value1;
    $this->SecondNumber = $Value2;
    }
public function Square() {
    return $this->FirstNumber * $this->FirstNumber;
}
}

class  SqRoot {
    private $FirstNumber, $SecondNumber;
    public function __construct( $Value1, $Value2 ) {
    $this->FirstNumber = $Value1;
    $this->SecondNumber = $Value2;
    }
    public function SqRoot() {
        return sqrt($this->FirstNumber);
}
}


$action = 'Addition';
class Factory
{
    public static function doCalculations($action)
    {
        if(class_exists($action))
            return new $action;
        else
            throw new Exception('Can`t realize' .$action); 

    }
}
$calculation = Factory::doCalculations($action);

var_dump($calculation);

/*$action = new MyCalculator(6, 3); 
echo $action-> Addition()."\n"; // Displays 9 
echo $action-> Multiplication()."\n"; // Displays 18
echo $action-> Subtraction()."\n"; // Displays 3
echo $action-> Division()."\n"; // Displays 2
echo $action-> Square()."\n"; // Displays 36
echo $action-> SqRoot()."\n"; // Displays*/ 

?>