<?php
// create database
$hostname = "localhost";
$username = "root";
$password = "";
$database = "crud1";

// create connection
$con = mysqli_connect($hostname, $username, $password, $database);

// check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}



?>