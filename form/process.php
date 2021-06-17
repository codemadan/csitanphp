<?php
session_start();


if( isset( $_POST['submit'] ) ){

    foreach( $_POST as $key => $value ){
        // echo $key . ' : ' . $value . '<br>';
        $validate = sanitize($value);
        if( $validate['success'] ){
            //true
            //further Process
            echo $key . ' : ' . htmlspecialchars($value) . '<br>';
            //mail
            // mail($to, $subject, $msg);
            //https://www.php.net/manual/en/function.mail.php
        }
        else{
            //false
            //show error

            $_SESSION['error'] = $key . ' is ' . $validate['msg'];
            header('location: index.php');

            //echo $key . ' is ' . $validate['msg'] . '<br>';
        }
    }

}
else{
    header('location: index.php');
}

function sanitize( $val ){

    //is empty
    if( empty($val) ){
        $result = [
            'success' => false,
            'msg'   => 'Empty'
        ];
    }
    else{
        $result = [
            'success' => true,
            'msg'   => 'Not Empty',
            'value' => $val
        ];
    }
    //trim
    $result['value'] = trim( $result['value'] );

    //escape
    $result['value'] = htmlentities( $result['value'] );

    //mysqli_real_escape_string()
    //$result['value'] = mysqli_real_escape_string( $result['value'], $conn );


    return $result;
}
