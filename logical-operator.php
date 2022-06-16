<?php

/*      Logical Operator        */

$ageOne = 20;
$ageTwo = 25;

// and operator (and is same as &&) :: True if both condition is true
if ($ageOne >= 18  and  $ageOne <= 23) {
    echo "and :: true";
}

echo "<br>";

// or operator (or is same as ||) :: True if one of condition is true
if ($ageTwo >= 18    ||  $ageTwo <= 23) {
    echo "or ::true";
}

echo "<br>";

// ! operator (Logical Not Operator) :: True if condition is false
if (!($ageOne == 25)) :
    echo "logical not :: true";
endif;

echo "<br>";

// xor operator :: True if any one condition is true. But if all of conditions are true or false then it returns false
if ($ageOne == 21    xor     $ageTwo > 20) {
    echo "xor :: true";
}
