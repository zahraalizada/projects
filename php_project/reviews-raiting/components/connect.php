<?php

$db_name = 'mysql:host=localhost;dbname=reviews_db';
$db_user_name = 'root';
$db_user_pass ='';

$conn = new PDO($db_name, $db_user_name, $db_user_pass);

function create_unique_id(){
    $charecters =
        '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charecters_length =strlen($charecters);
    $random_string = '';
    for($i = 0; $i < 20; $i++){
        $random_string .= $charecters[mt_rand(0, $charecters_length - 1)];
    }

    return $random_string;
}

if(isset($_COOKIE['user_id']))
?>