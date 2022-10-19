<!-- Create a class named Calculator that has the following methods and properties :

number_list – a property that accepts an array of numbers. 
Add – a method that adds the numbers inside the number_list 
Subtract – a method that subtracts the first two numbers inside the number_list property 
Divide – a method that adds the numbers inside the number_list property and divides it by the number of items inside the number_list 
Factorial – a method that returns the factorial of each number inside the number_list 
Prime – a method that returns an array of all prime numbers inside the number_list If no prime numbers are found, the method will return an empty array.  -->


<?php
class Calculator
{

    private $_fval;
    private $_sval;

    public function __construct($fval, $sval)
    {

        $this->_fval = $fval;
        $this->_sval = $sval;
    }
    public function add()
    {
        return $this->_fval + $this->_sval;
    }

    public function subtract()
    {
        return $this->_fval - $this->_sval;
    }

    public function multiply()
    {
        return $this->_fval * $this->_sval;
    }

    public function divide()
    {
        return $this->_fval / $this->_sval;
    }

}

$calculating = new Calculator(12, 6);
echo "By calculating the two numbers which is 12 & 6 in addition, subtraction, multiplication division,";
echo "</br>";
echo "</br>";
echo "Result in Additon: ";
echo $calculating->add() . "</br>"; 
echo "Result in Multiplication: ";
echo $calculating->multiply() . "</br>"; 
echo "Result in Subtraction: ";
echo $calculating->subtract() . "</br>"; 
echo "Result in Division: ";
echo $calculating->divide() . "</br>"; 


?>
<br><br>
<?php
function fact($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fact($n - 1);
    }
}

echo "Factorial of 12 is " . fact(12);
echo "</br>";
echo "</br>";

function fac($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fac($n - 1);
    }
}

echo "Factorial of 6 is " . fac(6);

?>