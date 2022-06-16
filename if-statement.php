<?php

/*      If Statement        */

$numberOne = 10;
$numberTwo = 20;

/* 
    if statement classification

    if(condition){
        statement;
    }

    another way to write if statement
    if(condition):
        statement;
    endif;
*/

//first way
if ($numberOne < $numberTwo) {
    echo "Number one is smaller than Number two.";
}

echo "<br>";

//second way
if ($numberOne != $numberTwo) :
    echo "Number one is not equals to Number two.";
endif;

echo "<br>";
echo "Other statement is here.";
