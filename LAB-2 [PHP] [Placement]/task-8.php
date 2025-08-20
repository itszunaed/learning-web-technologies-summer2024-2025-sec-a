<?php

$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];




foreach ($array[0] as $value) {
    echo $value . " ";
}
echo "<br>";


foreach (array_slice($array[1], 0, 2) as $value) {
    echo $value;
}
echo "<br>";


echo $array[2][0] . "<br>";


echo $array[0][3] . "<br>";


echo $array[1][2] . " " . $array[1][3] . "<br>";

foreach ($array[2] as $value) {
    echo $value . " ";
}
echo "<br>";
?>