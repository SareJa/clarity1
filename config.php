<?php

$host = "172.31.85.178";
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