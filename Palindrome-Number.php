<?php
function isPalindrome($x) {
      function firstDigit(int $n) {
        while ($n >= 10) 
            $n /= 10; 
        return round($n);
      }
    
    function lastDigit(int $n) {
        return ($n % 10);
    }
  
    $a = firstDigit($x); 
    $b = lastDigit($x); 

    if($a==$b)
        return "true"; 
    else
        return "false"; 
}

echo isPalindrome(101);
