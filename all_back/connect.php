<?php

include "function.php";
cors();
$dsn = "mysql:host=localhost;dbname=news";
$user = "root";
$pass = "";
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8" // FOR Arabic
);
try {


    $con = new PDO($dsn, $user, $pass, $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e) {
    echo $e->getMessage();
}