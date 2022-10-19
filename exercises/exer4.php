<?php

/**Agenda:
 * 1. Create a function spellMyName() that will accept $str 
 * and return each letter of the $str
 * 2. Make sure that the function can be called x times
 * where x is the number of letters the $str has.
*/
function spellMyName($str) {
        return $str;
}

$str = "Omne Jean Pelingon";
$arr = [];

for($j=0;$j<strlen($str);$j++) {
    //echo "The value of j index is $j.<br/>";
    $arr[$j] = spellMyName($str[$j]);
}


//for debug
print_r($arr);
?>