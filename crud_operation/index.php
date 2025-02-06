<?php
require_once('database.php');
// query database
$sql = "SELECT * FROM students";
// execute query and get results
$result = $connection->query($sql);

// check results
$students_data = [];
if($result->num_rows > 0){
    $students_data = $result->fetch_all(MYSQLI_ASSOC);
}




include_once('views/index.view.php');
?>