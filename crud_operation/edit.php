<?php
if (isset($_GET['id'])) {
    // database connection
    require_once('database.php');

    // query database
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = $id";
    // execute query and get results
    $result = $connection->query($sql);
    $data = $result->fetch_assoc();

    var_dump($data);
    die();

    include_once('views/edit.view.php');
}else{
    header("Location: index.php");
    exit();
}
