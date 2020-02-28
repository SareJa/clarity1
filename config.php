<?php

$host = "172.31.85.178";
$user = "root";
$pass = "toor1234!";
$db = "vehicles";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port) or die("Connect failed: %s\n");

if($conn->connect_errno){
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

var_dump("da");
exit();