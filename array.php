<?php

//simple Array
// $x = array( 1, 2.0, "here" ); php v5.3 or lower

// $x = [ 1, 2.0, "here" ];
// echo "<pre>";
//     var_dump($x);
// echo "</pre>";


//Associative array
// key => value

// $student = [
//     'name' => "Gaurav Pathak",
//     'college'   => "xyz College",
//     'age'   => 18
// ];
// $product = [
//     'name'  => 'Samsung Galaxy S21',
//     'brand' => 'Samsung',
//     'Price' => 150000.99
// ];
// echo "<pre>";
//     print_r($product);
// echo "</pre>";

//multidimensional Array

$products = [];
$products['category'] = 'Mobile Phone';
$products['items'][] = [
        'name'  => 'Samsung Galaxy S21',
        'brand' => 'Samsung',
        'Price' => 150000.99,
        'image' => 'img/s21.jpg'
];
$products['items'][] = [
    'name'  => 'Samsung Galaxy S21 Ultra',
    'brand' => 'Samsung',
    'Price' => 250000.99,
    'image' => 'img/s21Ultra.jpg'
];

echo "<pre>";
    print_r($products);
echo "</pre>";
?>
