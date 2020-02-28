<?php

$host = "172.31.85.178";
$user = "root";
$pass = "toor1234!";
$db = "vehicles";
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port) or die("Connect failed: %s\n");

if($conn->connect_error){
    echo "Conected Successful <br>";
}
else{
    echo "Not connected <br>";
}

var_dump("da");
exit();