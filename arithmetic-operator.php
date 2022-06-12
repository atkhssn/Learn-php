<?php

/* php arithmetic operator */

$numberOne  =   10;
$numberTwo  =   5;

$sum    =   $numberOne + $numberTwo;        // Addition (+)
echo "The sum is: " . $sum;
echo "<br>";

$sub    =   $numberOne - $numberTwo;        // Subtraction (-)
echo "The subtraction is: " . $sub;
echo "<br>";

$multi    =   $numberOne * $numberTwo;        // Multiplication (*)
echo "The multiplication is: " . $multi;
echo "<br>";

$divided    =   $numberOne / $numberTwo;        // Division (/)
echo "The division is: " . $divided;
echo "<br>";

$modulus    =   $numberOne % $numberTwo;        // Modulus (%)
echo "The modulus is: " . $modulus;
echo "<br>";

$exp   =   $numberOne ** $numberTwo;        // Exponentiation (**)
echo "The exponentiation is: " . $exp;
echo "<br>";


/* php increment / decrement operator */

$numberThree    =   3;

$numberThree++;     //  Increment operation (++). First assignment then addition by the 1 and give it output.
echo $numberThree;
echo "<br>";
++$numberThree;     //  Increment operation (++). First addition by the 1 then assignment and give it output.
echo $numberThree;
echo "<br>";

$numberThree--;     //  Decrement operation (--). First assignment then subtraction by the 1 and give it output.
echo $numberThree;
echo "<br>";
--$numberThree;     //  Decrement operation (--). First subtraction by the 1 then assignment and give it output.
echo $numberThree;
echo "<br>";
