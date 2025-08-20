<?php

function calculateVAT($amount, $vatrate) {
    return $amount * $vatrate;
}

$amount = 100;
$vatrate = 0.15; // Added the missing semicolon here
$vat = calculateVAT($amount, $vatrate);

echo "VAT: " . $vat . "<br>";

?>