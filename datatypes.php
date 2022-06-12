<?php

/* php datatypes*/

class myClass
{
    # Avoid this code for the beginning. This code is for $h. We will learn about this later on.
};

$a = "Atik Hassan";     //String

$b = 205;       // Integer

$c = 20.5;      // Float

$d = array();       // Array

$e = true;      // Boolean
$f = false;     // Boolean

$g = null;      // Null

$h = new myClass();     // Object

echo $a;
echo "<br>";
var_dump($a);
echo "<br>";

echo $b;
echo "<br>";
var_dump($b);
echo "<br>";

echo $c;
echo "<br>";
var_dump($c);
echo "<br>";

echo $d;        # Warning for using echo method. Array does not print by the echo method. (Note: # is also used for single line comment and "/*  ... */" is used for multi line comment)
echo "<br>";
var_dump($d);
echo "<br>";

echo $e;        // Boolean (true) value prints 1 by the echo method
echo "<br>";
var_dump($e);
echo "<br>";

echo $f;        // Boolean (false) value is not print by the echo method.
echo "<br>";
var_dump($f);
echo "<br>";

echo $g;        // Null value is not print by the echo method.
echo "<br>";
var_dump($g);
echo "<br>";

// echo $h;     # Fatal Error for using echo method. Object cannot print by the echo method.
echo "<br>";
var_dump($h);
echo "<br>";
