<?php
class WordCheck{
    public $word;
    
    function isPalindromeStr($word){
        if (strlen($word)<=1){
            return true;
            
        }else{
            if (substr($word, 0, 1)== substr($word,( strlen($word)-1),1)){
                return isPalindromeStr(substr($word, 1, strlen($word)-2));
                
            }else{
                return false;
            }
            

        }
        
    
    
    }
    
}

?>