<?php

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}



for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 4 - $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}


?>