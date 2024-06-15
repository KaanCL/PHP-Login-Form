<?php

$serverName = "localhost";
$userName = "root";
$dbname ="auth";
$password = "";


$conn = new mysqli($serverName, $userName,$password,$dbname);
if ($conn->connect_error) { 
    die("Connection failed:". $conn->connect_error);
}
?>