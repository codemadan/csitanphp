<?php


// Arithmetic Operator
/*
$x = 10;
$y = 20;

echo $x + $y; //Addition
echo '<hr>';

echo $y - $x; //substraction
echo '<hr>';

$div = $y / 3; // division
echo (int) $div;
echo '<hr>';

echo $y % 3; //Modulus -> Remainder

echo '<hr>';
echo $x ** 2;   //to the power

*/

//Assignment Operator
/*
$x = 10;
$x += 20; // $x = $x + 20
$x -= 5; // $x = $x + 5

echo $x;    
*/

// Increment/Decrement Operator
/*
$x = 10;
echo $x++; //Post Increment
echo ++$x; // Pre Increment

echo $x--; //Post Decrement
echo --$x; // Pre Decrement

echo "<hr>";
echo $x;
*/

//Logical Operators

// $x = 18.0;
// $y = 21;
// $z = 15;
/*
if( $x > $y && $x > $z ){   //Logical AND
    echo '$x is greater';
}
elseif( $x > $y || $x > $z ){   //Logical OR
    echo '$x is greater than one of given';
}

if( $x >= 20 ){
    echo "condition Satisfied";
}
else{
    echo "not satisfied";
}
*/

//Tertiary Operator
/*
$x = 18.0;
$y = 21;
$z = 15;

//syntax
// (condition) ? true : false;
echo ($x == 19) ? 'yes' : 'no';
*/

$x = null;

var_dump( $x ?? 'escape null' );
