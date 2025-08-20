<?php

function check($number) {
    if ($number % 2 == 0) {
    
        echo $number . " is Even.<br>";
    } 
    
    else {
        echo $number . " is Odd.<br>";
    }
}



$number = 7; 

check($number);

?>