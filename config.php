<?php

$host = "127.0.0.1";
$user = "root";
$pass = "toor1234!";
$db = "vehicles";
$port = 3306;

$conn = mysqli_connect($host, $user, $pass, $db, $port) or die("Connect failed: %s\n");

if($conn){
    echo "Conected Successful <br>";
}
else{
    echo "Not connected <br>";
}