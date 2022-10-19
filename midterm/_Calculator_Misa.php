<?php

// Create a class named Calculator that has the following methods and properties
class Calculator {
    
    public $number_list;
    
    // number_list – a property that accepts an array of numbers. 
     public function __construct($number_list = array(50, 45, 40, 35, 30, 25, 20, 15, 10, 5,)) {
        $this->number_list = $number_list;
    }

    // Add – a method that adds the numbers inside the number_list 
    public function add(){
        return $this->number_list[0] + $this->number_list[1] + $this->number_list[2] + $this->number_list[3]+ $this->number_list[4]
        + $this->number_list[5] + $this->number_list[6]  + $this->number_list[7]  + $this->number_list[8]  + $this->number_list[9]  ;
        print_r(array_sum($this->number_list));
    }

  
    // Subtract – a method that subtracts the first two numbers inside the number_list property 
    public function subtract(){
      return $this->number_list[0] - $this->number_list[1];
      
    }
   

    
   
    // Divide – a method that adds the numbers inside the number_list property and divides it by the number of items inside the number_list 
    public function divide(){
       $total = array_sum($this->number_list);
        $arritems = count($this->number_list);
        $result = $total / $arritems;
       return $result;
       
      
    }
   

    // Factorial – a method that returns the factorial of each number inside the number_list 
    public function factorial(){
        
        function fac($n, $fn){
            $fa= [];
            for($i = 0; $i < count ($n); $i++){ 
                $fa[$i] = $fn($n[$i]);
            }
            return $fa;
        }

        $userDefined = function($val) use (&$userDefined){ 
            if(1 == $val) {
                return 1;
            } else {
                return $val * $userDefined($val - 1); 
            }
         };
     
         $n = $this->number_list;
         $fac = fac($n, $userDefined);
       echo "<pre>",print_r($fac);
         
    }
    
    
    // Prime – a method that returns an array of all prime numbers inside the number_list If no prime numbers are found, the method will return an empty array.
    public function prime(){
        $numbers_list = $this->number_list;
        foreach($numbers_list as $primes_number) {
            if($primes_number%2==0){
                
            }else{
            echo "<pre>", $primes_number ."</br>";
            }
        }
    }
}



// << Debugging For my code >>

// $checking = new Calculator();


// echo "The result of adding inside the number_list property: ". $checking -> add();
// echo "<br>";
// echo "<br>";
// echo  "The result of subtracting inside the number_list property: ".$checking ->subtract();
// echo "<br>";
// echo "<br>";
// echo  " the result of dividing inside the number_list property. ".$checking ->divide() ;
// echo "<br>";
// echo "<br>";
// echo  "The factorial inside the number_list property: ".$checking->factorial();
// echo "<br>";
// echo "<br>";
// echo "The prime numbers inside the number_list property: ".$checking->prime();
