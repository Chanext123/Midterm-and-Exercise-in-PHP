<?php
class Circle{
   public $pi=3;
   function circumference ($radius){
    $circumference =2 *$this ->pi * $radius;
    echo $circumference;
    
   }
   function diameter ($radius){
    $diameter = 2 * ($radius);
    echo $diameter;
   }
  

}
$result =new Circle ();
$radius= 7;
    echo "Our Circle's Radius =".$radius. "</br>";
    echo "Our Circle's Circumference = ";
    $result -> circumference($radius);
echo "<br>";
    echo "Our Circle's Diameter = ";
    $result -> diameter ($radius);
?>