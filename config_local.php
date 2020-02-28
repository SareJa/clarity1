<?php

$host = "localhost";
$user = "phpmyadmin";
$pass = "toor1234!";
$db = "clarity";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port) or die("Connect failed: %s\n");

if($conn->connect_errno){
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}