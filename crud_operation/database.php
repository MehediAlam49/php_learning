<?php
// database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "crud_operation");


// database connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}



?>