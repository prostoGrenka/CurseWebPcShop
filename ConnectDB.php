<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed".mysqli_connect_error());
} else{
    
} ?>
