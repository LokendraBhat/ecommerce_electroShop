<?php

$db_name = 'mysql:host=localhost:3308;dbname=shop_db';
$user_name = 'root';
$user_password = '';

// $conn = new PDO($db_name, $user_name, $user_password);
$conn = new PDO($db_name, $user_name, $user_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

?>