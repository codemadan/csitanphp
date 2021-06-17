<?php

// Conditional Statement

/*
if (this)
    then that

    //Syntax
    if(condition){
        statement 1;
    }
    elseif(condition_2){
        statement 2;
    }
    else{
        statement 3
    }
*/

// $x = 2;

//if else ladder
// if( $x == 2){
//     echo "two";
// }
// elseif($x == 1){
//     echo "One";
// }
// else{
//     echo "not two";
// }

$x = 3;
switch( $x ){
    case "1":
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    default:
        echo "none of above";
}
