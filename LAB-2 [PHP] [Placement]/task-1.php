<?php

function calculate($length, $width) {
   
    $area = $length * $width;
    
    $perimeter = 2 * ($length + $width);
    
   
    echo "Length:" .$length ."<br>";
    echo "Width: " .$width ."<br>";
    echo "Area: " .$area ."<br>";
    echo "Perimeter: " . $perimeter ."<br>";
}


$length = 5;
$width = 3;   




calculate($length, $width);
?>