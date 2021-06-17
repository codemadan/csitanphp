<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Implementation</title>
    <style>
        .product{
            display: inline-block;
            border: 2px solid #333;
            margin: 15px;
            padding: 15px;
            max-width: 30%;
        }
        .product img{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
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
    
    //loop
    //sizeof
    // for( $i = 0; $i < sizeof($products['items']); $i++ ){
    //     echo "<pre>";
    //         print_r($products['items'][$i]);
    //     echo "</pre>";
    // }
    //echo sizeof( $products['items'] );

    foreach( $products['items'] as $items ){
        ?>
        <div class="product">
            <img src="<?php echo $items['image'] ?>" alt="">
            <h2><?php echo $items['name'] ?></h2>
            <div class="price">
                <?php echo "Rs." . $items['Price'] ?>
            </div>
        </div>
       <?php
    }
    
    ?>
</body>
</html>