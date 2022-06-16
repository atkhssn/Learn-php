<?php

/*      if elseif statement      */

$marks = 73;

if ($marks >= 80    &&  $marks <= 100) {
    echo "You are in Merit.";
} elseif ($marks >= 60    &&  $marks < 80) {
    echo "You are in 1st Division.";
} elseif ($marks >= 45    &&  $marks < 60) {
    echo "You are in 2nd Division.";
} elseif ($marks >= 33    &&  $marks < 45) {
    echo "Your are in 3rd Division.";
} elseif ($marks < 33) {
    echo "You are Fail.";
} else {
    echo "Please enter the valid  marks.";
}
