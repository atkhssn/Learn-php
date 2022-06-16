<?php

/*      Comparison Operator     */

$numberOne = 10;
$numberTwo = 10;
$numberThree = 15;
$numberFour = 5;


echo $numberOne     ==      $numberTwo;      //  Equals to ( == )
echo "<br>";

echo $numberOne     ===     $numberTwo;      //     Identical, If two values and data-types are same ( === )
echo "<br>";

echo $numberOne     !=      $numberThree;      //    Not Equals to ( != )
echo "<br>";

echo $numberOne     <>      $numberThree;      //    Not Equals to ( <> )
echo "<br>";

echo $numberOne     >       $numberFour;      //  Greater than ( > )
echo "<br>";

echo $numberOne     >=       $numberFour;      //  Greater than or Equals to ( >= )
echo "<br>";

echo $numberOne     <       $numberThree;      //  Less than ( < )
echo "<br>";

echo $numberOne     <=      $numberThree;      //  Less than or Equals to ( <= )
echo "<br>";

echo $numberOne     <=>      $numberTwo;      //  Spaceship, If it returns less than value is true then it prints -1, or two values are equal then it prints 0, or  it returns greater than values is true then it prints 1( <=> )
echo "<br>";
