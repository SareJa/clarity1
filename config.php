<?php

$host = "127.0.0.1";
$user = "root";
$pass = "toor1234!";
$db = "vehicles";

$conn = mysqli_connect($host, $user, $pass,$db) or die("Connect failed: %s\n");

if($conn){
    echo "Conected Successful <br>";
}
else{
    echo "Not connected <br>";
}