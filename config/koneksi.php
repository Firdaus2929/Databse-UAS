<?php

$host = "localhost";
$username ="root";
$password = "";
$database = "kalkulator";

$kon = mysqli_connect($host, $username , $password, $database);
if (mysqli_connect_errno()){
    echo "error connection ". mysqli_connect_error();
    exit;

}

?>