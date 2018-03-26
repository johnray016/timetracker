<?php 

$host = "localhost";
$username = "root";
$password = "";
$db = "tracker";

$conn = mysqli_connect($host, $username, $password, $db);
mysqli_set_charset($conn,'utf8');
