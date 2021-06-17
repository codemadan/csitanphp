<?php

$host = 'localhost';
//$port = "3308";
$user = 'dev';
$password = 'nologin';
$database = 'test';

$conn = mysqli_connect( $host, $user, $password, $database );

if(!$conn){
    die( 'Connection Error: ' . mysqli_connect_error() );
}
else{
    echo 'Connection Success';
}