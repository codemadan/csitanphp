<?php

/*
Function
-> block of code

syntax ->
function function_name(argument){
    statements;
    return result;
}
*/

//WAP to output sum of 2 digits --functional Approach

// $x = 10;
// $y = 20;

// sum(12, 35);

// function Sum( $x, $y ){
//     $z = $x + $y;
//     return $z;
// }

//echo sum( $x, $y );

// function sum($x, $y){
//     echo $x+$y;
// }


//default Argument
// $x = 5;
// $y = 10;
// echo sum($x, $y);

// function sum($x, $y=2){
//     return $x + $y;
// }


// $x = 5;
// $y = 10;

// echo sum($x, $y);

// function sum(){
//     global $x;
//     global $y;
//     return $x + $y;
// }


//only after php 8.0
//Named Argument
$x = 10;
$y = 15;

function sum($x=5, $y=7){
    echo "x = $x" . "<br>";
    echo "y = $y";
}

echo sum( y:25 );
